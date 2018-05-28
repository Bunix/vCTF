<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">題目名稱</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                {{ html()->input('text', 'title', '')->class('input')->attributes(["placeholder"=>"請輸入題目。e.g. Hello", 'required'=>'required']) }}
                <span class="icon is-left"><i class="far fa-trophy-alt"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">題目分類</label>
    </div>
    <div class="field-body">
        <div class="field" style="min-height: 36px;">
            <div class="control has-icons-left has-icons-right">
                {{ html()->input('text', 'category', '')->class('input')->attributes(["placeholder"=>"請輸入題目的分類，或者從下方已存在的分類中選一個。", 'required'=>'required']) }}
                <span class="icon is-left"><i class="far fa-bookmark"></i></span>
                <div class="tags" style="margin-top: 3px;">
                    @foreach($categories as $category)
                        <span class="tag is-info category-tag">{{ $category }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">題目內容</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                {{ html()->textarea('content', '')->class('textarea')->attributes(['required'=>'required']) }}
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">旗標類型</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <label class="radio">
                    {{ html()->input('radio', 'flag_type', '0') }}
                    一般
                </label>
                <label class="radio">
                    {{ html()->input('radio', 'flag_type', '1') }}
                    Regex
                </label>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">旗標</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                {{ html()->input('text', 'flag', '')->class('input')->attributes(["placeholder"=>"請輸入題目的自定義flag。", 'required'=>'required']) }}
                <span class="icon is-left"><i class="far fa-flag"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">分數</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                {{ html()->input('number', 'point', '')->class('input')->attributes(["placeholder"=>"請輸入本題的分數。（大於 0 謝謝）", 'required'=>'required']) }}
                <span class="icon is-left"><i class="far fa-star"></i></span>
            </div>
        </div>
    </div>
</div>


<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">顯示順序</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                {{ html()->input('number', 'seq', '')->class('input')->attributes(["placeholder"=>"請輸入顯示順序。（大於 0 謝謝，越大越前面）", 'required'=>'required']) }}
                <span class="icon is-left"><i class="far fa-star"></i></span>
            </div>
        </div>
    </div>
</div>


<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">隱藏題目</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <label class="checkbox">
                    {{ html()->input('checkbox', 'hidden', '1') }}
                    隱藏題目
                </label>
            </div>
        </div>
    </div>
</div>


<div class="field is-grouped is-grouped-centered">
    <p class="control">
        <button class="button is-primary" type="submit">
            <span class="icon"><i class="far fa-check"></i></span>
            <span>送出</span>
        </button>
    </p>
    <p class="control">
        @if(isset($flag) && $flag == 'edit')
            <a class="button is-link" href="{{ route('quest.show', [$contest, $quest]) }}" style="margin-bottom: 0;">
                <span class="icon"><i class="far fa-arrow-left"></i></span>
                <span>返回</span>
            </a>
        @else
            <a class="button is-link" href="{{ route('quest.index', $contest) }}" style="margin-bottom: 0;">
                <span class="icon"><i class="far fa-arrow-left"></i></span>
                <span>返回</span>
            </a>
        @endif
    </p>
</div>