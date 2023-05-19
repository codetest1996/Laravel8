
<div>
    <form method="get" action='{{route('select')}}'>
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
<!--<pre>
    {{print_r($list->toArray())}}
</pre>-->

    @foreach($list as $v)
    <div class="row" style="display:inline-block ;border: 1px solid black;">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> 廠牌  {{ $v->p_label }}</h5>
                     <p class="card-text">                        
                         {{ $v->p_name }}<br>
                        <span style="color:CC0000; font-size:18px; font-weight: bold;">{{ $v->o_price }}</span>
                        <span style="color:#888888;text-decoration: line-through">{{ $v->a_price }}</span>
                    </p>
            </div>
            </div>
        </div>
    </div>
    @endforeach


</div>