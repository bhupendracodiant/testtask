@extends('master')

@section('content')
<!--== BODY INNER CONTAINER ==-->
<style>
    input[type="file"] {
        display: block;
    }

    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
        width: 117px;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }
</style>
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
            <li class="active-bre"><a href="#"> Update product</a> </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
        </ul>
    </div>
    <div class="tz-2 tz-2-admin">
        <div class="tz-2-com tz-2-main">
            <h4>Update product</h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>

            <!-- Dropdown Structure -->
            <div class="split-row">
                <div class="col-md-12">
                    <div class="box-inn-sp ad-inn-page">
                        <div class="tab-inn ad-tab-inn">
                            <div class="hom-cre-acc-left hom-cre-acc-right">
                                <div class="">

                                    <form class="" method="POST" action="action_update_product" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="pid" value="{{$products->id }}">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <span>Product name</span>
                                                <input id="first_name" type="text" class="validate" name="pname" value="{{$products->name}}">

                                            </div>
                                            <div class="input-field col s6">
                                                <span>Product SKU</span>
                                                <input id="last_name" type="text" class="validate" name="psku" value="{{$products->sku}}">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span>Price</span>
                                                <input id="list_phone" type="text" class="validate" name="pprice" value="{{$products->price}}">

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span>Product Descriptions</span>
                                                <textarea id="editor" class="materialize-textarea" name="descriptions">{{$products->descriptions}}</textarea>

                                            </div>
                                        </div>
                                
                                <div class="row">
                                    <div class="field" align="left">
                                        <h4>Upload multiple images</h4>
                                        <input type="file" id="files" name="files[]" multiple />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <input type="submit" value="Update product" class="waves-button-input"></div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@endsection