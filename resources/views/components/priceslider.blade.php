 <div class="sidebar-widget price_range range mb-30">
     <h5 class="section-title style-1 mb-30">Filter by price</h5>
     <div class="price-filter">
         <div class="price-filter-inner">
             <h2 class="widget-title" style="font-size:12px;padding-bottom:10px;">Price
                 <span class="text-info"></span>
             </h2>
             <div class="widget-content" style="padding-bottom:20px;">
                 <div id="slider" wire:ignore>
                 </div>
             </div>
         </div>
     </div>
     <div class="list-group">
         <div class="list-group-item mb-10 mt-10">
             {{-- <label class="fw-900">Color</label>
             <div class="custome-checkbox">
                 <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                 <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                 <br>
                 <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                 <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                 <br>
                 <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                 <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
             </div> --}}
             <label class="fw-900 mt-15">Item Condition</label>
             <div class="block">
                 <div class="form-inline" style="display: flex;flex-direction:row;">
                    <input type="checkbox" name="new" style="width:18px; margin-right:10px;" value="New" wire:model="new">
                    <label class="form-check-label"  for="exampleCheckbox11" style="margin-top:10px;"><span style="font-weight:700;">New </span></label>
                 </div>

                 <div class="form-inline" style="display: flex;flex-direction:row;">
                     <input type="checkbox" name="used"  style="width:18px; margin-right:10px;" value="Used" wire:model="used">
                     <label class="label-control" for="exampleCheckbox21" style="margin-top:10px;"><span style="font-weight:700;">Used </span></label>

                    </div>
                    <div class="form-inline" style="display: flex;flex-direction:row;">
                 <input type="checkbox" name="refurnished"  style="width:18px; margin-right:10px;" value="Refurnished" wire:model="refurnished">
                 <label class="form-check-label" for="exampleCheckbox31" style="margin-top:10px;"><span style="font-weight:700;">Refurnished </span></label>
                </div>
             </div>
         </div>
     </div>
 </div>
