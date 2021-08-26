@extends('master')

@section('content')

<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
            <li class="active-bre"><a href="#"> Product Details</a> </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
        </ul>
    </div>
    <div class="tz-2 tz-2-admin">
        <div class="tz-2-com tz-2-main">
            <h4>Product Details </h4>

            <!-- Dropdown Structure -->
            <div class="split-row">
                <div class="col-md-12">
                    <div class="box-inn-sp ad-inn-page">
                        <div class="tab-inn ad-tab-inn">
                            <div class="hom-cre-acc-left hom-cre-acc-right">
                                <div class="" style="margin-left: 37px;">

                                    <div class="row">

                                        <div class="input-field col s6">

                                            <p> <b>Product name - </b> {{ $products->name }}</p>

                                        </div>
                                        <div class="input-field col s6">
                                            <p> <b>Product price - </b> {{ $products->price }}</p>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="input-field col s6">

                                            <p> <b>Product sku - </b> {{ $products->sku }}</p>

                                        </div>
                                        <div class="input-field col s6">
                                            <p> <b>Product images- </b> 
                                            <?php
                                            if(!empty($products->images))
                                            {
                                                $imagedata = explode(",", $products->images);
                                                foreach($imagedata as $key=>$imagedatavalue)
                                                {

                                                ?>
                                                <img src="{{url('upload')}}<?php
                                                 echo '/' . $imagedata[$key]; ?>" width="80" height="80">
                                             <?php
                                                }
                                            }
                                            ?>
                                            </p>
                                        </div>
                                    </div>






                                    <div class="row">

                                        <div class="input-field col s6">
                                            <p> <b>Current status - </b><?php if ($products->status == 1)
                                                                            echo 'Active';
                                                                        else
                                                                            echo 'Block'; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="input-field col s6">

                                            <p> <b>Product description - </b> {{ $products->descriptions }}</p>

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
</div>
</div>
<!--== BOTTOM FLOAT ICON ==-->


@endsection