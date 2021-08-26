@extends('master')

@section('content')
<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
            <li class="active-bre"><a href="#"> Add product</a> </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
        </ul>
    </div>
    <div class="tz-2 tz-2-admin">
        <div class="tz-2-com tz-2-main">
            <h4>Add New product</h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>

            <!-- Dropdown Structure -->
            <div class="split-row">
                <div class="col-md-12">
                    <div class="box-inn-sp ad-inn-page">
                        <div class="tab-inn ad-tab-inn">
                            <div class="hom-cre-acc-left hom-cre-acc-right">
                                <div class="">
                                    @if (session('success_message'))
                                    <div class="alert alert-success">
                                        {{ session('success_message') }}
                                    </div>
                                    @endif
                                    @if(Session::has('error_message'))
                                    <p class="alert alert-danger">{{ Session::get('error_message') }}</p>
                                    @endif


                                    <form class="" method="POST" action="action_add_product" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" class="validate" name="pname" required>
                                                <label for="first_name">Product name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" class="validate" name="psku" required>
                                                <label for="last_name">Product SKU</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list_phone" type="text" class="validate" name="pprice" required>
                                                <label for="list_phone">Price</label>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span>Product Descriptions</span>
                                                <textarea id="editor" class="materialize-textarea" name="descriptions"></textarea>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span>Product images(you can choose multiple images)</span>
                                                <input type="file" name="files[]" value="upload images" multiple required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12"> <input type="submit" value="Add product" class="waves-button-input"></div>
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