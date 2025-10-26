@extends('admin.layouts.app')


@section('content')

<div class="page-header">
    <div class="add-item d-flex">
        <div class="page-title">
            <h4 class="fw-bold">Create Product</h4>
            <h6>Create new product</h6>
        </div>
    </div>
    <ul class="table-top-head">
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh"><i
                    class="ti ti-refresh"></i></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" id="collapse-header" aria-label="Collapse"
                data-bs-original-title="Collapse"><i class="ti ti-chevron-up"></i></a>
        </li>
    </ul>
    <div class="page-btn mt-0">
        <a href="product-list.html" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-2">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>Back to Product</a>
    </div>
</div>


<form action="add-product.html" class="add-product-form">
    <div class="add-product">
        <div class="accordions-items-seperate" id="accordionSpacingExample">
            <div class="accordion-item border mb-4">
                <h2 class="accordion-header" id="headingSpacingOne">
                    <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
                        data-bs-target="#SpacingOne" aria-expanded="true" aria-controls="SpacingOne">
                        <div class="d-flex align-items-center justify-content-between flex-fill">
                            <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-info text-primary me-2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg><span>Product Information</span></h5>
                        </div>
                    </div>
                </h2>
                <div id="SpacingOne" class="accordion-collapse collapse show" aria-labelledby="headingSpacingOne">
                    <div class="accordion-body border-top">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Store <span class="text-danger ms-1">*</span></label>
                                    <select id="storeSelect" class="form-select select2">
                                        <option value="">Select</option>
                                        <option value="Electro Mart">Electro Mart</option>
                                        <option value="Quantum Gadgets">Quantum Gadgets</option>
                                        <option value="Gadget World">Gadget World</option>
                                        <option value="Volt Vault">Volt Vault</option>
                                        <option value="Elite Retail">Elite Retail</option>
                                        <option value="Prime Mart">Prime Mart</option>
                                        <option value="NeoTech Store">NeoTech Store</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
    <label class="form-label">Warehouse <span class="text-danger ms-1">*</span></label>
    <select id="warehouseSelect" class="form-select select2">
        <option value="">Select</option>
        <option value="Lavish Warehouse">Lavish Warehouse</option>
        <option value="Quaint Warehouse">Quaint Warehouse</option>
        <option value="Traditional Warehouse">Traditional Warehouse</option>
        <option value="Cool Warehouse">Cool Warehouse</option>
        <option value="Overflow Warehouse">Overflow Warehouse</option>
        <option value="Nova Storage Hub">Nova Storage Hub</option>
        <option value="Retail Supply Hub">Retail Supply Hub</option>
        <option value="EdgeWare Solutions">EdgeWare Solutions</option>
    </select>
</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Product Name<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Slug<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3 list position-relative">
                                    <label class="form-label">SKU<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control list">
                                    <button type="submit" class="btn btn-primaryadd">
                                        Generate
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                               <div class="mb-3">
                                    <label class="form-label">Selling Type <span class="text-danger ms-1">*</span></label>
                                    <select id="sellingTypeSelect" class="form-select select2">
                                        <option value="">Select</option>
                                        <option value="Online">Online</option>
                                        <option value="POS">POS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="addservice-info">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
    <div class="add-newplus d-flex align-items-center justify-content-between">
        <label class="form-label">Category <span class="text-danger ms-1">*</span></label>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-product-category" class="d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle me-1">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            <span>Add New</span>
        </a>
    </div>
    <select id="categorySelect" class="form-select select2">
        <option value="">Select</option>
        <option>Computers</option>
        <option>Electronics</option>
        <option>Shoe</option>
        <option>Cosmetics</option>
        <option>Groceries</option>
        <option>Furniture</option>
        <option>Bags</option>
        <option>Phone</option>
    </select>
</div>

                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
    <label class="form-label">Sub Category <span class="text-danger ms-1">*</span></label>
    <select id="subCategorySelect" class="form-select select2">
        <option value="">Select</option>
        <option>Laptop</option>
        <option>Desktop</option>
        <option>Sneakers</option>
        <option>Formals</option>
        <option>Wearables</option>
        <option>Speakers</option>
        <option>Handbags</option>
        <option>Travel</option>
        <option>Sofa</option>
    </select>
</div>

                                </div>
                            </div>
                        </div>
                        <div class="add-product-new">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                   <div class="mb-3">
    <div class="add-newplus">
        <label class="form-label">Brand <span class="text-danger ms-1">*</span></label>
    </div>
    <select id="brandSelect" class="form-select select2">
        <option value="">Select</option>
        <option>Lenevo</option>
        <option>Beats</option>
        <option>Nike</option>
        <option>Apple</option>
        <option>Amazon</option>
        <option>Woodmart</option>
    </select>
</div>

                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
    <div class="add-newplus">
        <label class="form-label">Unit <span class="text-danger ms-1">*</span></label>
    </div>
    <select id="unitSelect" class="form-select select2">
        <option value="">Select</option>
        <option>Kg</option>
        <option>Pcs</option>
        <option>L</option>
        <option>dz</option>
        <option>bx</option>
    </select>
</div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                               <div class="mb-3">
    <div class="add-newplus">
        <label class="form-label">Barcode Symbology <span class="text-danger ms-1">*</span></label>
    </div>
    <select id="barcodeSelect" class="form-select select2">
        <option value="">Select</option>
        <option>Code 128</option>
        <option>Code 39</option>
        <option>UPC-A</option>
        <option>UPC_E</option>
        <option>EAN-8</option>
        <option>EAN-13</option>
    </select>
</div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                 <div class="mb-3 list position-relative">
                                    <label class="form-label">Item Barcode<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control list">
                                    <button type="submit" class="btn btn-primaryadd">
                                        Generate
                                    </button>
                                </div>
                            </div>
                           
                        </div>
                        <!-- Editor -->
                        <div class="col-lg-12">
                            <div class="mb-3">
    <label class="form-label">Description</label>
    <div id="descriptionEditor" class="editor"></div>
    <p class="fs-14 mt-1">Maximum 60 Words</p>
</div>
                        </div>
                        <!-- /Editor -->
                    </div>
                </div>
            </div>
            <div class="accordion-item border mb-4">
                <h2 class="accordion-header" id="headingSpacingTwo">
                    <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
                        data-bs-target="#SpacingTwo" aria-expanded="true" aria-controls="SpacingTwo">
                        <div class="d-flex align-items-center justify-content-between flex-fill">
                            <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-life-buoy text-primary me-2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                    <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                    <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                    <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                    <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                </svg><span>Pricing &amp; Stocks</span></h5>
                        </div>
                    </div>
                </h2>
                <div id="SpacingTwo" class="accordion-collapse collapse show" aria-labelledby="headingSpacingTwo">
                    <div class="accordion-body border-top">
                        <div class="mb-3s">
                            <label class="form-label">Product Type<span class="text-danger ms-1">*</span></label>
                            <div class="single-pill-product mb-3">
                                <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <span class="custom_radio me-4 mb-0 active" id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-home" role="tab"
                                            aria-controls="pills-home" aria-selected="true">
                                            <input type="radio" class="form-control" name="payment">
                                            <span class="checkmark"></span> Single Product</span>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <span class="custom_radio me-2 mb-0" id="pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab"
                                            aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                            <input type="radio" class="form-control" name="sign">
                                            <span class="checkmark"></span> Variable Product</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="single-product">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Quantity<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Price<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
    <label class="form-label">Tax Type <span class="text-danger ms-1">*</span></label>
    <select class="select" id="taxType">
        <option value="">Select</option>
        <option value="exclusive">Exclusive</option>
        <option value="inclusive">Inclusive</option>
    </select>
</div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
    <label class="form-label">Tax <span class="text-danger ms-1">*</span></label>
    <select class="select" id="taxSelect">
        <option value="">Select</option>
        <option value="igst">IGST (8%)</option>
        <option value="gst5">GST (5%)</option>
        <option value="sgst">SGST (4%)</option>
        <option value="cgst">CGST (16%)</option>
        <option value="gst18">GST (18%)</option>
    </select>
</div>

                                        </div>

                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
    <label class="form-label">Discount Type <span class="text-danger ms-1">*</span></label>
    <select class="select" id="discountType">
        <option value="">Select</option>
        <option value="percentage">Percentage</option>
        <option value="fixed">Fixed</option>
    </select>
</div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Discount Value<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Quantity Alert<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row select-color-add">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Variant Attribute <span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="row">
                                                <div class="col-lg-10 col-sm-10 col-10">
                                                    <select class="form-control variant-select select-option"
                                                        id="colorSelect">
                                                        <option>Choose</option>
                                                        <option>Color</option>
                                                        <option value="red">Red</option>
                                                        <option value="black">Black</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                                    <div class="add-icon tab">
                                                        <a class="btn btn-filter" data-bs-toggle="modal"
                                                            data-bs-target="#add-product-category"><i
                                                                class="feather feather-plus-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selected-hide-color" id="input-show">
                                            <label class="form-label">Variant Attribute <span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="row align-items-center">
                                                <div class="col-lg-10 col-sm-10 col-10">
                                                    <div class="mb-3">
                                                        <div class="bootstrap-tagsinput"><span
                                                                class="tag label label-info">red<span
                                                                    data-role="remove"></span></span> <span
                                                                class="tag label label-info"> black<span
                                                                    data-role="remove"></span></span> <input type="text"
                                                                placeholder=""></div><input
                                                            class="input-tags form-control" id="inputBox" type="text"
                                                            data-role="tagsinput" name="specialist" value="red, black"
                                                            style="display: none;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                                    <div class="mb-3 ">
                                                        <a href="javascript:void(0);" class="remove-color"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-body-table border" id="variant-table">
                                    <div class="table-responsive">
                                        <table class="table border">
                                            <thead>
                                                <tr>
                                                    <th>Variantion</th>
                                                    <th>Variant Value</th>
                                                    <th>SKU</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th class="no-sort"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="color">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="red">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="1234">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity">
                                                            <span class="quantity-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-minus-circle feather-search">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                                </svg></span>
                                                            <input type="text" class="quntity-input form-control"
                                                                value="2">
                                                            <span class="quantity-btn">+<svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-plus-circle plus-circle">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                                </svg></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="50000">
                                                        </div>
                                                    </td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <div class="input-block add-lists">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="checkmarks"></span>
                                                                </label>
                                                            </div>
                                                            <a class="me-2 p-2" href="javascript:void(0);"
                                                                data-bs-toggle="modal" data-bs-target="#add-variation">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-plus feather-edit">
                                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                </svg>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                                class="p-2" href="javascript:void(0);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="color">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="black">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="2345">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity">
                                                            <span class="quantity-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-minus-circle feather-search">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                                </svg></span>
                                                            <input type="text" class="quntity-input form-control"
                                                                value="3">
                                                            <span class="quantity-btn">+<svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-plus-circle plus-circle">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                                </svg></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="add-product">
                                                            <input type="text" class="form-control" value="50000">
                                                        </div>
                                                    </td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <div class="input-block add-lists">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="checkmarks"></span>
                                                                </label>
                                                            </div>
                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#add-variation">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-plus feather-edit">
                                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                </svg>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                                class="p-2" href="javascript:void(0);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border mb-4">
                <h2 class="accordion-header" id="headingSpacingThree">
                    <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
                        data-bs-target="#SpacingThree" aria-expanded="true" aria-controls="SpacingThree">
                        <div class="d-flex align-items-center justify-content-between flex-fill">
                            <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-image text-primary me-2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg><span>Images</span></h5>
                        </div>
                    </div>
                </h2>
                <div id="SpacingThree" class="accordion-collapse collapse show" aria-labelledby="headingSpacingThree">
                    <div class="accordion-body border-top">
                        <div class="text-editor add-list add">
                            <div class="col-lg-12">
                                <div class="add-choosen">
                                    <div class="mb-3">
                                        <div class="image-upload image-upload-two">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus-circle plus-down-add me-0">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                </svg>
                                                <h4>Add Images</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="phone-img">
                                        <img src="assets/img/products/phone-add-2.png" alt="image">
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x x-square-add remove-product">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></a>
                                    </div>

                                    <div class="phone-img">
                                        <img src="assets/img/products/phone-add-1.png" alt="image">
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x x-square-add remove-product">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border mb-4">
                <h2 class="accordion-header" id="headingSpacingFour">
                    <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
                        data-bs-target="#SpacingFour" aria-expanded="true" aria-controls="SpacingFour">
                        <div class="d-flex align-items-center justify-content-between flex-fill">
                            <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-list text-primary me-2">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg><span>Custom Fields</span></h5>
                        </div>
                    </div>
                </h2>
                <div id="SpacingFour" class="accordion-collapse collapse show" aria-labelledby="headingSpacingFour">
                    <div class="accordion-body border-top">
                        <div>
                            <div class="p-3 bg-light rounded d-flex align-items-center border mb-3">
                                <div class=" d-flex align-items-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="warranties" value="option1">
                                        <label class="form-check-label" for="warranties">Warranties</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="manufacturer"
                                            value="option2">
                                        <label class="form-check-label" for="manufacturer">Manufacturer</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="expiry" value="option2">
                                        <label class="form-check-label" for="expiry">Expiry</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
    <label class="form-label">Warranty <span class="text-danger ms-1">*</span></label>
    <select class="select" id="warranty">
        <option value="">Select</option>
        <option value="replacement">Replacement Warranty</option>
        <option value="on-site">On-Site Warranty</option>
        <option value="accidental">Accidental Protection Plan</option>
    </select>
</div>

                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3 add-product">
                                        <label class="form-label">Manufacturer<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Manufactured Date<span
                                                class="text-danger ms-1">*</span></label>

                                        <div class="input-groupicon calender-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-calendar info-img">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <input type="text" class="datetimepicker form-control"
                                                placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Expiry On<span
                                                class="text-danger ms-1">*</span></label>

                                        <div class="input-groupicon calender-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-calendar info-img">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <input type="text" class="datetimepicker form-control"
                                                placeholder="dd/mm/yyyy">
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
    <div class="col-lg-12">
        <div class="d-flex align-items-center justify-content-end mb-4">
            <button type="button" class="btn btn-secondary me-2">Cancel</button>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    </div>
</form>









@endsection
