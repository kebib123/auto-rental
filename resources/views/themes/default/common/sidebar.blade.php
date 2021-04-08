<div class="col-lg-3">
            <!--  -->
            @if($services->count()>0)

            <div class="box-sidebar mb-3">
               <h5 class="h6">Product & Services   </h5>
               <ul class="sidebar-link">
                    @foreach($services as $row)
                  <li >
                       @if($row->external_link)
                               <a href="{{$row->external_link}}" target="_blank">
                                 @else
                              <a href="{{url(geturl($row['uri'],$row['page_key']))}}">
                                 @endif<span> {{$row->post_title}}  </span></a>
                                  @if(has_child_post($row->id)) 
                     <ol>
                        @foreach(has_child_post($row->id) as $_row)
                           <li>  @if($_row->external_link)
                               <a href="{{$_row->external_link}}" target="_blank">
                                 @else
                              <a href="{{url(geturl($_row['uri'],$_row['page_key']))}}">
                                 @endif
                                 {{$_row->post_title}}   </a></li>
                                 @endforeach
                       
                     </ol>
                     @endif
                  </li>
                 @endforeach
               </ul>
            </div>
            @endif
            <!--  -->
            <!--  -->
              @if($downloads->count()>0)
            <div class="box-sidebar mb-3">
            <h5 class="h6">Downloads     </h5>
               <ul class="sidebar-link">
                   @foreach($downloads as $row)
                  <li> @if($row->external_link)
                   <a href="{{$row->external_link}}" target="_blank">
                     @else
                  <a href="{{url(geturl($row['uri'],$row['page_key']))}}">
                     @endif<span> {{$row->post_title}}  </span></a></li>
                 @endforeach
               </ul>
            </div>
              @endif
            <!--  -->
         </div>