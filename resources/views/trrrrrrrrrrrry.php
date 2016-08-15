        if(Auth::user()->status == 'reseller')
        {
            $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
            $site_id=Session::get('user_id');
        }
        else
        {
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
            $site_id=Auth::user()->site->id;    
        }

        $pages=Page::where('site_id', $site_id)->get();



        'categories','subcategories','pages',
        'categories'=>$categories,'subcategories'=>$subcategories,'pages'=>$pages,





        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/3a.png')}}" class="img-responsive"> 
        </div>
        </div>


            <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/category')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>




            <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/category')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='EDIT' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>



            make test mistake in static page
             X   update button and image