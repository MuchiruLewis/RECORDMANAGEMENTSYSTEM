<div class="content mt-3">
<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h3>SEARCH OB ENTRIES</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('posts')}}?search='+this.value)"
                       placeholder="Search OB" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('posts')}}?search='+$('#search').val())">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

          </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>

            <th width="60px">No</th>
            <th><a href="javascript:ajaxLoad('{{url('posts?field=title&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">OB NUMBER</a>
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>
            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('posts?field=Reportername&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Person Reporting
                </a>
                {{request()->session()->get('field')=='Reportername'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('posts?field=Reporttype&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Report Type
                </a>
                {{request()->session()->get('field')=='Reporttype'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('posts?field=Reportingdate&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                Report Date
              </a>
              {{request()->session()->get('field')=='Reportingdate'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>
            <th width="160px" style="vertical-align: middle">
              <a href="policeob"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> New Post</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($posts as $post)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $post->title }}</td>
            <td >{{ $post->Reportername }}</td>
            <td>{{ $post->Reporttype }}</td>
            <td>{{ $post->Reportingdate }}</td>
            <td>
              <a class="btn btn-info btn-xs" title="View Details"
                 href="javascript:ajaxLoad('{{url('posts/show/'.$post->id)}}')">
                  V</a>
                <a class="btn btn-warning btn-xs" title="Edit"
                   href="javascript:ajaxLoad('{{url('posts/update/'.$post->id)}}')">
                    E</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('posts/delete/'.$post->id)}}','{{csrf_token()}}')">
                    D
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

        <ul class="pagination">
            {{ $posts->links() }}
        </ul>
</div>
