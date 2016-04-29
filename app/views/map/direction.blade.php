<html xmlns="http://www.w3.org/1999/xhtml"  xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API Example: Directions + Static Map</title>
    <script src=" http://maps.google.com/?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
    <style type="text/css">
      body {
        font-family: Verdana, Arial, sans serif;
        font-size: 11px;
        margin: 2px;
      }
      table.directions th {
        background-color:#EEEEEE;
      }
      img {
        color: #000000;
      }
    </style>
    <script type="text/javascript">

    var map,
    gdir,
    geocoder = null,
    addressMarker,
    sweetyams = "218 N Cherry St, San Antonio, TX 78202";


    function initialize() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map_canvas"));
        gdir = new GDirections(map, document.getElementById("directions"));
        GEvent.addListener(gdir, "addoverlay", onGDirectionsLoad);
        GEvent.addListener(gdir, "error", handleErrors);

        setDirections(sweetyams, "7406 snow valley");
      }
    }

    function setDirections(sweetyams, toAddress) {
      gdir.load("from: " + sweetyams + " to: " + toAddress,
                { "locale": "en_US"});
    }

    function handleErrors(){
   if (gdir.getStatus().code == G_GEO_UNKNOWN_ADDRESS)
     alert("No corresponding geographic location could be found for one of the specified addresses. This may be due to the fact that the address is relatively new, or it may be incorrect.\nError code: " + gdir.getStatus().code);
   else if (gdir.getStatus().code == G_GEO_SERVER_ERROR)
     alert("A geocoding or directions request could not be successfully processed, yet the exact reason for the failure is not known.\n Error code: " + gdir.getStatus().code);
   else if (gdir.getStatus().code == G_GEO_MISSING_QUERY)
     alert("The HTTP q parameter was either missing or had no value. For geocoder requests, this means that an empty address was specified as input. For directions requests, this means that no query was specified in the input.\n Error code: " + gdir.getStatus().code);
   else if (gdir.getStatus().code == G_GEO_BAD_KEY)
     alert("The given key is either invalid or does not match the domain for which it was given. \n Error code: " + gdir.getStatus().code);
   else if (gdir.getStatus().code == G_GEO_BAD_REQUEST)
     alert("A directions request could not be successfully parsed.\n Error code: " + gdir.getStatus().code);
   else alert("An unknown error occurred.");
    }

  function onGDirectionsLoad(){
   var poly = gdir.getPolyline();
   if (poly.getVertexCount() > 100) {
     alert("This route has too many vertices");
     return;
   }
   var baseUrl = "http://maps.google.com/staticmap?";

   var params = [];
   var markersArray = [];
   markersArray.push(poly.getVertex(0).toUrlValue(5) + ",greena");
   markersArray.push(poly.getVertex(poly.getVertexCount()-1).toUrlValue(5) + ",greenb");
   params.push("markers=" + markersArray.join("|"));

   var polyParams = "rgba:0x0000FF80,weight:5|";
   var polyLatLngs = [];
   for (var j = 0; j < poly.getVertexCount(); j++) {
     polyLatLngs.push(poly.getVertex(j).lat().toFixed(5) + "," + poly.getVertex(j).lng().toFixed(5));
   }
   params.push("path=" + polyParams + polyLatLngs.join("|"));
   params.push("size=300x300");
   params.push("key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw");

   baseUrl += params.join("&");

   var extraParams = [];
   extraParams.push("center=" + map.getCenter().lat().toFixed(6) + "," + map.getCenter().lng().toFixed(6));
   extraParams.push("zoom=" + map.getZoom());
   addImg(baseUrl + "&" + extraParams.join("&"), "staticMapOverviewIMG");

   var extraParams = [];
   extraParams.push("center=" + poly.getVertex(0).toUrlValue(5));
   extraParams.push("zoom=" + 15);
   addImg(baseUrl + "&" + extraParams.join("&"), "staticMapStartIMG");

   var extraParams = [];
   extraParams.push("center=" + poly.getVertex(poly.getVertexCount()-1).toUrlValue(5));
   extraParams.push("zoom=" + 15);
   addImg(baseUrl + "&" + extraParams.join("&"), "staticMapEndIMG");
}

function addImg(url, id) {
 var img = document.createElement("img");
 img.src = url;
 document.getElementById(id).innerHTML = "";
 document.getElementById(id).appendChild(img);
}

    </script>

  </head>
  <body onload="initialize()" onunload="GUnload()">


  <form action="#" onsubmit="setDirections(this.from.value, this.to.value); return false">

  <table>

   <tr><th align="right">From:&nbsp;</th>

   <td><input type="text" size="25" id="fromAddress" name="from"
     value="Sweet Yams"/></td>
   <th align="right">&nbsp;&nbsp;To:&nbsp;</th>


   <tr><th>Language:&nbsp;</th>
   <td colspan="3">
    <input name="submit" type="submit" value="Get Directions!" />
   </td></tr>
   </table>


  </form>

    <br/>
    <table class="directions">
    <tr><th>Directions</th><th>Map</th></tr>

    <tr>
    <td valign="top"><div id="directions" style="width: 275px"></div></td>
    <td valign="top"><div id="map_canvas" style="width: 310px; height: 400px"></div></td>

    </tr>
    </table>

 <div id="staticMapOverviewIMG"></div>
 <div id="staticMapStartIMG"></div>
 <div id="staticMapEndIMG"></div>
<br clear="all"/>

  </body>
</html>
