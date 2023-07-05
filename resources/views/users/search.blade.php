{{-- @extends('layouts.app')

@section('content')

<style>
    .label{
        transition: all 0.5s;
                &:hover, &:hover+div div span  {
            background: #c8e4f8; 
            color: #000; 
            border: 1px solid #94a0b4;
        }
    }
</style>


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                <h2 class="page-header">
                    {{ trans('app.search_your_family') }}
                    @if (request('q'))
                        <small class="pull-right">{!! trans('app.user_found', ['total' => $users->total(), 'keyword' => request('q')]) !!}</small>
                    @endif
                </h2>
                {{ Form::open(['method' => 'get', 'class' => '']) }}
                <div class="input-group">
                    {{ Form::text('q', request('q'), [
                        'class' => 'form-control',
                        'placeholder' => trans('app.search_your_family_placeholder'),
                    ]) }}
                    <span class="input-group-btn">
                        {{ Form::submit(trans('app.search'), ['class' => 'btn btn-default']) }}
                        {{ link_to_route('users.search', 'Reset', [], ['class' => 'btn btn-default']) }}
                    </span>
                </div>
                {{ Form::close() }}

                @if (request('q'))
                    <br>
                    {{ $users->appends(Request::except('page'))->render() }}
                    @foreach ($users->chunk(4) as $chunkedUser)
                        <div class="row">
                            @foreach ($chunkedUser as $user)
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            {{ userPhoto($user, ['style' => 'width:100%;max-width:300px']) }}
                                            @if ($user->age)
                                                {!! $user->age_string !!}
                                            @endif
                                        </div>
                                        <div class="panel-body">
                                            <h3 class="panel-title">{{ $user->profileLink() }} ({{ $user->gender }})</h3>
                                            <div>{{ trans('اسم الشهرة') }} : {{ $user->nickname }}</div>
                                            <hr style="margin: 5px 0;">
                                            <div>{{ trans('user.father') }} :
                                                {{ $user->father_id ? $user->father->name : '' }}
                                            </div>
                                            <div>{{ trans('user.mother') }} :
                                                {{ $user->mother_id ? $user->mother->name : '' }}
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            {{ link_to_route(
                                                'users.show',
                                                trans('app.show_profile'),
                                                [$user->id],
                                                [
                                                    'class' => 'btn btn-default
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        btn-xs',
                                                ],
                                            ) }}
                                            {{ link_to_route(
                                                'users.chart',
                                                trans('app.show_family_chart'),
                                                [$user->id],
                                                [
                                                    'class' => 'btn
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        btn-default btn-xs',
                                                ],
                                            ) }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    {{ $users->appends(Request::except('page'))->render() }}
                @endif
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span></h4>

                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    $childsTotal = 0;
    $grandChildsTotal = 0;
    $paTotal = 0;
    $ppaTotal = 0;
    $ppaaTotal = 0;
    $pppaaTotal = 0;
    $pppaaaTotal = 0;
    $ppppaaaTotal = 0;
    $ppppaaaaTotal = 0;
    
    $gcTotal = 0;
    $ggTotal = 0;
    $ggcTotal = 0;
    $ggccTotal = 0;
    $gggccTotal = 0;
    $gggcccTotal = 0;
    $ggggcccTotal = 0;
    $ggggccccTotal = 0;
    $gggggccccTotal = 0;
    $gggggcccccTotal = 0;
    $ggggggcccccTotal = 0;
    $ggggggccccccTotal = 0;
    ?>


    @foreach ($userss as $user)
    <div id="wrapper">
        <?php
        $father = $user->father_id ? $user->father : $user;
        $fatherGrandpa = $father && $father->father_id ? $father->father : $user;
        $fatherGrandpa_1 = $fatherGrandpa && $fatherGrandpa->father_id ? $fatherGrandpa->father : $user;
        $fatherGrandpa_2 = $fatherGrandpa_1 && $fatherGrandpa_1->father_id ? $fatherGrandpa_1->father : $user;
        $fatherGrandpa_3 = $fatherGrandpa_2 && $fatherGrandpa_2->father_id ? $fatherGrandpa_2->father : $user;
        $fatherGrandpa_4 = $fatherGrandpa_3 && $fatherGrandpa_3->father_id ? $fatherGrandpa_3->father : $user;
        $fatherGrandpa_5 = $fatherGrandpa_4 && $fatherGrandpa_4->father_id ? $fatherGrandpa_4->father : $user;
        ?>


                    <span
                    class="label"><button  style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa_5->name, [$fatherGrandpa_5->id], ['title' => $fatherGrandpa_5->name . ' (' . $fatherGrandpa_5->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
                </span>
        @if ($ppppaaaCount = $fatherGrandpa_4->childs->count())
        <?php $ppppaaaTotal += $ppppaaaCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa_4->childs as $fatherGrandpa5)
                <div
                    class="entry {{ $ppppaaaCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa5->name, [$fatherGrandpa5->id], ['title' => $fatherGrandpa5->name . ' (' . $fatherGrandpa5->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        @if ($pppaaaCount = $fatherGrandpa5->childs->count())
        <?php $pppaaaTotal += $pppaaaCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa5->childs as $fatherGrandpa4)
                <div
                    class="entry {{ $pppaaaCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa4->name, [$fatherGrandpa4->id], ['title' => $fatherGrandpa4->name . ' (' . $fatherGrandpa4->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        @if ($pppaaCount = $fatherGrandpa4->childs->count())
        <?php $pppaaTotal += $pppaaCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa4->childs as $fatherGrandpa3)
                <div
                    class="entry {{ $pppaaCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa3->name, [$fatherGrandpa3->id], ['title' => $fatherGrandpa3->name . ' (' . $fatherGrandpa3->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>

        @if ($ppaaCount = $fatherGrandpa3->childs->count())
        <?php $ppaaTotal += $ppaaCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa3->childs as $fatherGrandpa2)
                <div
                    class="entry {{ $ppaaCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa2->name, [$fatherGrandpa2->id], ['title' => $fatherGrandpa2->name . ' (' . $fatherGrandpa2->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>

        @if ($ppaCount = $fatherGrandpa->childs->count())
        <?php $ppaTotal += $ppaCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa->childs as $fatherGrandpa1)
                <div
                    class="entry {{ $ppaCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherGrandpa1->name, [$fatherGrandpa1->id], ['title' => $fatherGrandpa1->name . ' (' . $fatherGrandpa1->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        @if ($paCount = $fatherGrandpa1->childs->count())
        <?php $paTotal += $paCount; ?>
        <div class="branch lv5">
            @foreach ($fatherGrandpa1->childs as $fatherchild)
                <div
                    class="entry {{ $paCount == 1 ? 'sole' : '' }}">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $fatherchild->name, [$fatherchild->id], ['title' => $fatherchild->name . ' (' . $fatherchild->gender . ')']) }}</button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        @if ($childsCount = $fatherchild->childs->count())
            <?php $childsTotal += $childsCount; ?>
            <div class="branch lv1">
                @foreach ($fatherchild->childs as $child)
                    <div class="entry {{ $childsCount == 1 ? 'sole' : '' }}">
                        <span
                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $child->name, [$child->id], ['title' => $child->name . ' (' . $child->gender . ')']) }}</button>
                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                        @if ($grandsCount = $child->childs->count())
                            <?php $grandChildsTotal += $grandsCount; ?>
                            <div class="branch lv2">
                                @foreach ($child->childs as $grand)
                                    <div class="entry {{ $grandsCount == 1 ? 'sole' : '' }}">
                                        <span
                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $grand->name, [$grand->id], ['title' => $grand->name . ' (' . $grand->gender . ')']) }}</button>
                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                        @if ($ggCount = $grand->childs->count())
                                            <?php $ggTotal += $ggCount; ?>
                                            <div class="branch lv3">
                                                @foreach ($grand->childs as $gg)
                                                    <div class="entry {{ $ggCount == 1 ? 'sole' : '' }}">
                                                        <span
                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $gg->name, [$gg->id], ['title' => $gg->name . ' (' . $gg->gender . ')']) }}</button>
                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                        @if ($ggcCount = $gg->childs->count())
                                                            <?php $ggcTotal += $ggcCount; ?>
                                                            <div class="branch lv4">
                                                                @foreach ($gg->childs as $ggc)
                                                                    <div class="entry {{ $ggcCount == 1 ? 'sole' : '' }}">
                                                                        <span
                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $ggc->name, [$ggc->id], ['title' => $ggc->name . ' (' . $ggc->gender . ')']) }}</button>
                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                        @if ($ggccCount = $ggc->childs->count())
                                                                            <?php $ggccTotal += $ggccCount; ?>
                                                                            <div class="branch lv5">
                                                                                @foreach ($ggc->childs as $ggcc)
                                                                                    <div
                                                                                        class="entry {{ $ggccCount == 1 ? 'sole' : '' }}">
                                                                                        <span
                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $ggcc->name, [$ggcc->id], ['title' => $ggcc->name . ' (' . $ggcc->gender . ')']) }}</button>
                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                            @if ($gggccCount = $ggcc->childs->count())
                                                                            <?php $gggccTotal += $ggccCount; ?>
                                                                            <div class="branch lv5">
                                                                                @foreach ($ggcc->childs as $gggcc)
                                                                                    <div
                                                                                        class="entry {{ $gggccCount == 1 ? 'sole' : '' }}">
                                                                                        <span
                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $gggcc->name, [$gggcc->id], ['title' => $gggcc->name . ' (' . $gggcc->gender . ')']) }}</button>
                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                            @if ($gggcccCount = $gggcc->childs->count())
                                                                                            <?php $gggcccTotal += $gggcccCount; ?>
                                                                                            <div class="branch lv5">
                                                                                                @foreach ($gggcc->childs as $gggccc)
                                                                                                    <div
                                                                                                        class="entry {{ $gggcccCount == 1 ? 'sole' : '' }}">
                                                                                                        <span
                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $gggccc->name, [$gggccc->id], ['title' => $gggccc->name . ' (' . $gggccc->gender . ')']) }}</button>
                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                            @if ($ggggcccCount = $gggccc->childs->count())
                                                                                                            <?php $ggggcccTotal += $ggggcccCount; ?>
                                                                                                            <div class="branch lv5">
                                                                                                                @foreach ($gggccc->childs as $ggggccc)
                                                                                                                    <div
                                                                                                                        class="entry {{ $ggggcccCount == 1 ? 'sole' : '' }}">
                                                                                                                        <span
                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $ggggccc->name, [$ggggccc->id], ['title' => $ggggccc->name . ' (' . $ggggccc->gender . ')']) }}</button>
                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                            @if ($ggggccccCount = $ggggccc->childs->count())
                                                                                                                            <?php $ggggccccTotal += $ggggccccCount; ?>
                                                                                                                            <div class="branch lv5">
                                                                                                                                @foreach ($ggggccc->childs as $ggggcccc)
                                                                                                                                    <div
                                                                                                                                        class="entry {{ $ggggccccCount == 1 ? 'sole' : '' }}">
                                                                                                                                        <span
                                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $ggggcccc->name, [$ggggcccc->id], ['title' => $ggggcccc->name . ' (' . $ggggcccc->gender . ')']) }}</button>
                                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                                            @if ($gggggccccCount = $ggggcccc->childs->count())
                                                                                                                                            <?php $gggggccccTotal += $gggggccccCount; ?>
                                                                                                                                            <div class="branch lv5">
                                                                                                                                                @foreach ($ggggcccc->childs as $gggggcccc)
                                                                                                                                                    <div
                                                                                                                                                        class="entry {{ $gggggccccCount == 1 ? 'sole' : '' }}">
                                                                                                                                                        <span
                                                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;">{{ link_to_route('users.tree', $gggggcccc->name, [$gggggcccc->id], ['title' => $gggggcccc->name . ' (' . $gggggcccc->gender . ')']) }}</button>
                                                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                                                    </div>
                                                                                                                                                @endforeach
                                                                                                                                            </div>
                                                                                                                                        @endif
                                                                                                                                    </div>
                                                                                                                                @endforeach
                                                                                                                            </div>
                                                                                                                        @endif
                                                                                                                    </div>
                                                                                                                @endforeach
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            @endif
        </div>
        @endforeach
    </div>
        @endif
        </div>
        @endforeach
    </div>
        @endif
        </div>
        @endforeach
    </div>
        @endif
        </div>
        @endforeach
    </div>
        @endif
        </div>
        @endforeach
    </div>
        @endif
        </div>
        @endforeach
    </div>
        @endif

    </div>
    </div>
</div>
    </div>
    @endforeach

</div>
</div>

</div>
</div>







@endsection
@section('ext_css')
<link rel="stylesheet" href="{{ asset('css/tree.css') }}">
@endsection --}}
