
<div>
    <form method="post" action='{{route('select')}}'>
        {{ csrf_field() }}
             <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" id="select_p" placeholder="請輸入關鍵字" name="select_p">
                    <button type="submit" class="btn btn-primary">查詢</button>
                </div>
             </div>
            <div class="modal-footer">
                
            </div>
     </form>
</div>

<div>

    @foreach($list as $v)
    <div class="row" style="display:inline-block ;border: 1px solid black;">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> 廠牌  {{ $v->p_label }}</h5>
                    <p class="card-text">                        
                        名稱  {{ $v->p_name }}<br>
                        官方售價  {{ $v->o_price }}<br>
                        實際售價  {{ $v->a_price }}<br>
                    </p>
            </div>
            </div>
        </div>
    </div>
    @endforeach


     <div class="text-center">
       
    </div>


    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
            <span class="page-link">{{ $page_list }}</span>
            </li>
        </ul>
    </nav>

</div>

