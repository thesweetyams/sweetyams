@foreach($addOns as $addOn)
									<div class="form-group">
									    <div class="checkbox{{ $errors->has('addOn') ? ' has-error' : '' }}">
									        <label for="addOn">
									            {{ Form::checkbox('addOn',$addOn->description, null, ['id' => 'addOn']) }} {{{$addOn->description}}}
									        </label>
									    </div>
									    <small class="text-danger">{{ $errors->first('addOn') }}</small>
									</div>
								@endforeach
															@if($category->id == 3)
								
							@endif