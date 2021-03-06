@extends('layouts.admin')
@section('content')
 
<section class="articles">
     <div class="container">
         <div class="col-md-9 mx-auto bg-light shadow-sm border-0 card card-default">
             <div class="card-header">
                    <a href="{{ route('/') }}"><< admin</a>
                    <h3 class="text-center">Blog Posts</h3>
                    <div class="pull-right">
                         <a href="{{ route('articles.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Add New</a> 
                    </div>
                    @if (session()->has('flash_notification.message'))
                    <div class="alert alert-{{ session('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! session('flash_notification.message') !!}
                    </div>
                    @endif
               </div>
               <div class="card-body">
                    <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                         <div class="table-responsive overflowFixed">
                              <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                   <thead>
                                        <tr role="row">
                                             <th class="col-md-2">Title</th>
                                             <th class="col-md-2">Summary</th>
                                             <th class="col-md-2">Date</th>
                                             <th class="col-md-2">Status</th>
                                             <th class="col-md-2">Actions</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($articles as $article)
                                   <tr role="row" class="odd">
                                        <td class="v-align-middle">
                                             <p>
                                                  {{ $article->title }}
                                             </p>
                                        </td>
                                        <td class="v-align-middle">
                                             <p>
                                                  {{ $article->summary }}
                                             </p>
                                        </td>
                                        <td class="v-align-middle">
                                             <p>
                                                  @php ($date = explode('-', explode(' ', $article->updated_at)[0]))
                                                  {{ $date[2] . "-" . $date[1] . "-" . $date[0] }}
                                             </p>
                                        </td>
                                        <td class="v-align-middle">
                                             <p>
                                                  @php ($state = DB::table('states')->where('id', $article->state_id)->get())
                                                  {{ $state[0]->name }}
                                             </p>
                                        </td>
                                        <td class="v-align-middle buttons-table">
                                             <ul class="list-group list-unstyled">
                                                  <li><a href="{{ route('articles.show', $article->id) }}">See</a> </li>
                                                  
                                                  <li><a href="{{ route('articles.edit', $article->id) }}">
                                                       Edit
                                                  </a></li> 
                                                  
                                                  @if(Auth::user()->role_id == 1)
                                                       <li><a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('Delete the article?')" onkeypress="return confirm('Delete the article?')">
                                                            Delete
                                                       </a></li>
                                                  @endif
                                             </ul>                   
                                        </td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                              <div class="text-center">{!! $articles->render() !!}</div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>


@endsection

