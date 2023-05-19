<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">-->

<div>
    <form method="get" action='{{route('select')}}'>
        {{ csrf_field() }}
             <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control " id="select_p" style="padding:5px;" placeholder="請輸入關鍵字" name="select_p">
                    <button type="submit" class="btn btn-primary">查詢</button>
                </div>
             </div>
            <div class="modal-footer">
                
            </div>
     </form>
</div>

<div>

    @foreach($list as $v)
    <div class="row" style="display:inline-block;border: 1px solid black;">
        <div class="col-sm-6">

                <h5 class="card-title"> 廠牌  {{ $v->p_label }}</h5>
                    <p class="card-text">                        
                         {{ $v->p_name }}<br>
                        <span style="color:CC0000; font-size:18px; font-weight: bold;">{{ $v->o_price }}</span>
                        <span style="color:#888888;text-decoration: line-through">{{ $v->a_price }}</span>
                    </p>
 
        </div>
    </div>
    @endforeach




    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
            <span class="page-link">{{ $list->links() }}</span>
            </li>
        </ul>
    </nav>


    <style>
        .w-5{
            display: none;
        }

    </style>

</div>

