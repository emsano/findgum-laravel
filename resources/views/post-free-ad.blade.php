@extends('layouts.app')

@section('content')
<div class="container-fluid post-ad-container">
    <div class="card shadow col-md-6 col-sm-12 mx-auto p-0">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-post-outline"></i>Post Free Ad</h5>
        <form action="#" method="POST" id="post-ad-form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="ad-title" class="font-weight-bolder">Ad Title</label>
                    <input type="text" class="form-control" id="ad-title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="categ-select" class="font-weight-bolder">Select Category</label>
                    <select class="dependent form-control mb-2" name="products" id="categ-select" multiple>
                        <optgroup label="Main Category">
                            <option>SubCategory</option>
                        </optgroup>
                        <optgroup label="Car Parts & Accessories">
                            <option>SubCategory</option>
                            <option>Body Parts & Accessories</option>
                            <option>Car Audio and Video</option>
                            <<option>Alarm and Electronics</option>
                            <option>Stickers and Decals</option>
                            <option>Engine Parts & Accessories</option>
                            <option>Aircon Parts</option>
                            <option>Lighting and Horns</option>
                            <option>Electrical parts & Accessories</option>
                            <option>Tires and Mags</option>
                            <option>Electrical parts & Accessories</option>
                            <option>Tires and Mags</option>
                            <option>Fluid and Filters</option>
                            <option>Mufflers & Accessories</option>
                            <option>Steering Wheel</option>
                            <option>Breaks and Accessories</option>
                            <option>Upholstery, Seatcovers & Car Interior Designs</option>
                        </optgroup>
                        <optgroup label="Vehicle Rentals">
                            <option>SubCategory</option>
                            <option>Van For Rent</option>
                            <option>Car For Rent</option>
                            <option>Bus For Rent</option>
                            <option>Other Vehicles</option>
                            <option>Cars for Sale</option>
                        </optgroup>
                        <optgroup label="Motorbikes">
                            <option>SubCategory</option>
                            <option>Motorbikes for Sale</option>
                            <option>Motorbike Parts and Accessories</option>
                        </optgroup>
                        <optgroup label="Special Vehicles">
                            <option>SubCategory</option>
                            <option>Boats</option>
                            <option>Aircrafts</option>
                            <option>Heavy Vehicles</option>
                            <option>Body Parts & Accessories</option>
                            <option>Heavy Vehicle Parts & Accessories</option>
                            <option>Aircraft Parts & Accessories</option>
                        </optgroup>
                        <optgroup label="Mobile Phones">
                            <option>SubCategory</option>
                            <option>iPhone</option>
                            <option>Android Phones</option>
                            <option>Mobile Accessories</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="Tablets">
                            <option>SubCategory</option>
                            <option>iPad</option>
                            <option>Android Tablets</option>
                            <option>Table Accessories</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="Electronics">
                            <option>SubCategory</option>
                            <option>Audio</option>
                            <option>CCTV & Security Cameras</option>
                            <option>Video & Accessories</option>
                            <option>Computer Parts & Accessories</option>
                            <option>Printers and Scanners</option>
                            <option>Television</option>
                            <option>Speakers & Entertainment Systems</option>
                            <option>Other Electronics</option>
                        </optgroup>
                        <optgroup label="PC & Gadget Repair">
                            <option>SubCategory</option>
                            <option>Desktop & Laptop Repair</option>
                            <option>MAC Repair</option>
                            <option>iPhone</option>
                            <option>iPad</option>
                            <option>Smartphone & Android</option>
                            <option>Tablet Repair</option>
                        </optgroup>
                        <optgroup label="Jobs and Opportunities">
                            <option>SubCategory</option>
                            <option>Admin, Office Staff and Finance</option>
                            <option>Cleaning and Housekeeping</option>
                            <option>Creative Media and Publishing</option>
                            <option>Domestic Helper</option>
                            <option>Engineering and Technical</option>
                            <option>Customer Service</option>
                            <option>Call Center Agent</option>
                            <option>Computer and IT</option>
                            <option>Distributors</option>
                            <option>Education, Training and Seminars</option>
                            <option>Events Host</option>
                            <option>Hotel and Restaurant</option>
                            <option>Internships</option>
                            <option>Production Operator</option>
                            <option>Factory Worker</option>
                            <option>Security</option>
                            <option>Nursing and Healthcare</option>
                            <option>Sales, Retail and Marketing</option>
                            <option>Transport and Delivery</option>
                            <option>Family Diner and Other</option>
                        </optgroup>
                        <optgroup label="Home Services">
                            <option>SubCategory</option>
                            <option>Home Cleaning</option>
                            <option>Aircon Cleaning and Services</option>
                            <option>Home Repairs</option>
                            <option>Renovation and Interior Design</option>
                            <option>Plumbing Services</option>
                            <option>Electrical, Lighting and Wiring</option>
                            <option>Movers and Delivery</option>
                            <option>Other Services</option>
                        </optgroup>
                        <optgroup label="Lifestyle">
                            <option>SubCategory</option>
                            <option>Pet Care and Services</option>
                            <option>Electronic and Gadget Repairs</option>
                            <option>Food and Party Services</option>
                            <option>Caregiving Services</option>
                            <option>Tailoring</option>
                            <option>Beauty and Health</option>
                        </optgroup>
                        <optgroup label="Travel">
                            <option>SubCategory</option>
                            <option>Hotels and Accomodations</option>
                            <option>Tours and Packages</option>
                            <option>Attractions</option>
                            <option>Flights</option>
                            <option>Cruises and Ship Travel</option>
                        </optgroup>
                        <optgroup label="Business">
                            <option>SubCategory</option>
                            <option>IT and PRogramming</option>
                            <option>Adnmin and Finance</option>
                            <option>Legal</option>
                            <option>Design and Marketing</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="For Rent - Real Estate and Property">
                            <option>SubCategory</option>
                            <option>Rooms</option>
                            <option>Condos</option>
                            <option>Apartment</option>
                            <option>Townhouse</option>
                            <option>Office Space</option>
                            <option>Retail</option>
                            <option>Industrial Building</option>
                            <option>Hotels</option>
                            <option>Multi-Purpose Hall</option>
                            <option>Basketball Court</option>
                        </optgroup>
                        <optgroup label="For Sale - Real Estate and Property">
                            <option>SubCategory</option>
                            <option>Apartment</option>
                            <option>Condos</option>
                            <option>House and Lot</option>
                            <option>Commercial Space</option>
                            <option>Memorial Lot</option>
                            <option>Lot for Sale</option>
                        </optgroup>
                        <optgroup label="Fashion Statement - Womens">
                            <option>SubCategory</option>
                            <option>Heels</option>
                            <option>Sneakers</option>
                            <option>Boots</option>
                            <option>Flats and Sandals</option>
                            <option>Others - Shoes</option>
                            <option>Handbags</option>
                            <option>Tote</option>
                            <option>Slingbags</option>
                            <option>Micro Mino</option>
                            <option>Clatchbag</option>
                            <option>Backpacks</option>
                            <option>Others - Bags</option>
                            <option>Clothes</option>
                            <option>Accessories</option>
                            <option>Jewelries</option>
                            <option>Watches</option>
                            <option>Wallets</option>
                        </optgroup>
                        <optgroup label="Fashion Statement - Mens">
                            <option>SubCategory</option>
                            <option>Formal</option>
                            <option>Sneakers</option>
                            <option>Boots</option>
                            <option>Sandals and Slippers</option>
                            <option>Others - Shoes</option>
                            <option>Briefcase</option>
                            <option>Tote</option>
                            <option>Messenger</option>
                            <option>Duffle</option>
                            <option>Sack</option>
                            <option>Backpacks</option>
                            <option>Bowling</option>
                            <option>Satchel</option>
                            <option>Belt Bag/Fannypack</option>
                            <option>Clothes</option>
                            <option>Accessories</option>
                            <option>Watches</option>
                            <option>Wallets</option>
                        </optgroup>
                        <optgroup label="Health & Beauty">
                            <option>SubCategory</option>
                            <option>Skin, Bath and Body</option>
                            <option>Makeup, Eyelashes and Eyebrow</option>
                            <option>Perfumes, Nail Care and Others</option>
                            <option>Hair Care</option>
                            <option>Men's Grooming</option>
                        </optgroup>
                        <optgroup label="For Babies and Kids">
                            <option>SubCategory</option>
                            <option>Strollers, Bags and Carries</option>
                            <option>Girls Apparel</option>
                            <option>Boys Apparel</option>
                            <option>Cribs</option>
                            <option>Nursing and Feeding</option>
                            <option>Toys for Babies</option>
                        </optgroup>
                        <optgroup label="Home and Furniture">
                            <option>SubCategory</option>
                            <option>Home Appliances</option>
                            <option>Home Tools and Accessories</option>
                            <option>Furniture and Fixtures</option>
                        </optgroup>
                        <optgroup label="Travel Essentials">
                            <option>SubCategory</option>
                            <option>Luggages</option>
                            <option>Travel Accessories</option>
                            <option>Outdoor and Camping</option>
                        </optgroup>
                        <optgroup label="Photography">
                            <option>SubCategory</option>
                            <option>Photography Services</option>
                            <option>Camera Equipment</option>
                            <option>Camera Gears and Accessories</option>
                            <option>Digital Camera</option>
                            <option>360 Camera</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="Sports">
                            <option>SubCategory</option>
                            <option>Bicycles</option>
                            <option>Airsoft</option>
                            <option>Body Building</option>
                            <option>Racket Sports</option>
                            <option>Water Sports</option>
                            <option>Sports Clothing</option>
                            <option>Billiards and Bowling</option>
                            <option>Combat Sports</option>
                            <option>Field Sports</option>
                            <option>Outdoor Sports</option>
                            <option>Indoor Sports</option>
                            <option>Scooters, Unicycles and Skateboards and Accessories</option>
                            <option>Other Sports</option>
                        </optgroup>
                        <optgroup label="Music and Media">
                            <option>SubCategory</option>
                            <option>Musical Instruments</option>
                            <option>Musical Accessories</option>
                           <option>CD, DVD and Other Media</option>
                        </optgroup>
                        <optgroup label="Arts and Craft">
                            <option>SubCategory</option>
                            <option>Handcraft Accessories</option>
                            <option>Artwork</option>
                            <option>Craft Supplies and Tools</option>
                            <option>Paintings and Designs</option>
                        </optgroup>
                        <optgroup label="Books">
                            <option>SubCategory</option>
                            <option>Books</option>
                            <option>Childrens Books</option>
                            <option>Magazines</option>
                            <option>Song Hits</option>
                            <option>Comics and Manga</option>
                            <option>Business Books</option>
                            <option>Textbook</option>
                        </optgroup>
                        <optgroup label="Construction and Industrial">
                            <option>SubCategory</option>
                            <option>Construction Tools and Euipments</option>
                            <option>Construction and Building Materials</option>
                            <option>Industrial Equipment</option>
                        </optgroup>
                        <optgroup label="Pets and Supplies">
                            <option>SubCategory</option>
                            <option>Pet Accessories</option>
                            <option>Pet Food</option>
                        </optgroup>
                        <optgroup label="Tickets and Vouchers">
                            <option>SubCategory</option>
                            <option>Even Tickets</option>
                            <option>Airline Tickets</option>
                            <option>Attractions</option>
                            <option>Gift Cards and Vouchers</option>
                        </optgroup>
                        <optgroup label="Foods and Beverages">
                            <option>SubCategory</option>
                            <option>Water, Softdrinks & Juices</option>
                            <option>Alcoholic Drinks</option>
                            <option>Dairy Products</option>
                            <option>Bread & Bakery Products</option>
                            <option>Rice, Grains & Pasta</option>
                            <option>AttrFruits and Vegetablesactions</option>
                            <option>Meat, Poultry and Seafood</option>
                            <option>Sugar and Coffee</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="Community">
                            <option>SubCategory</option>
                            <option>Activities</option>
                            <option>Groups</option>
                            <option>Churches</option>
                            <option>Free Stuffs</option>
                            <option>Bayanihan</option>
                            <option>Garage Sales</option>
                            <option>Local News</option>
                            <option>Lost and Found</option>
                            <option>Politics</option>
                            <option>Volunteer</option>
                            <option>Others</option>
                        </optgroup>
                        <optgroup label="Video Gaming">
                            <option>SubCategory</option>
                            <option>Video Games<option>
                            <option>Gaming Console and Accessories</option>
                        </optgroup>
                        <optgroup label="Toys and Games">
                            <option>SubCategory</option>
                            <option>Board and Card Games</option>
                                <option>Toys</option>
                        </optgroup>
                        <optgroup label="Antiques">
                            <option>SubCategory</option>
                            <option>Furnitures</option>
                            <option>Stamps</option>
                            <option>Currency</option>
                            <option>Vintage Collectibles</option>
                            <option>Vintage Accessories</option>
                            <option>Vintage Others</option>
                        </optgroup>
                        <optgroup label="Gardening">
                            <option>SubCategory</option>
                            <option>Flower and Plants</option>
                            <option>Feeds and Seeds</option>
                            <option>Garden Tools and Supplies</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group item-desc-container">
                    <label class="font-weight-bolder" for="item-desc">Description</label>
                    <div class="mb-2" id="editparent">
                        <div id="editControls">
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="undo" href="#" title="Undo"><i
                                        class="mdi mdi-undo"></i></a>
                                <a class="btn btn-xs btn-default" data-role="redo" href="#" title="Redo"><i
                                        class="mdi mdi-redo"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="bold" href="#" title="Bold"><i
                                        class="mdi mdi-format-bold"></i></a>
                                <a class="btn btn-xs btn-default" data-role="italic" href="#" title="Italic"><i
                                        class="mdi mdi-format-italic"></i></a>
                                <a class="btn btn-xs btn-default" data-role="underline" href="#"
                                    title="Underline"><i class="mdi mdi-format-underline"></i></a>
                                <a class="btn btn-xs btn-default" data-role="strikeThrough" href="#"
                                    title="Strikethrough"><i class="mdi mdi-format-strikethrough"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="indent" href="#" title="Blockquote"><i
                                        class="mdi mdi-format-indent-increase"></i></a>
                                <a class="btn btn-xs btn-default" data-role="insertUnorderedList" href="#"
                                    title="Unordered List"><i class="mdi mdi-format-list-bulleted"></i></a>
                                <a class="btn btn-xs btn-default" data-role="insertOrderedList" href="#"
                                    title="Ordered List"><i class="mdi mdi-format-list-numbered"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="h1" href="#" title="Heading 1"><i
                                        class="mdi mdi-format-header-1"></i></a>
                                <a class="btn btn-xs btn-default" data-role="h2" href="#" title="Heading 2"><i
                                        class="mdi mdi-format-header-2"></i></a>
                                <a class="btn btn-xs btn-default" data-role="h3" href="#" title="Heading 3"><i
                                        class="mdi mdi-format-header-3"></i></a>
                                <a class="btn btn-xs btn-default" data-role="p" href="#" title="Paragraph"><i
                                        class="mdi mdi-format-paragraph"></i></a>
                            </div>
                        </div>
                        <div class="border" id="editor" maxlength="1000" contenteditable>

                        </div>
                        <textarea class="item-desc" name="ticketDesc" id="editorCopy" required="required"
                            style="display:none;" maxlength="1000">
                                </textarea>
                    </div>
                </div>
                <p class="font-weight-bolder mb-0">Condition</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="used-ad" value="used-ad">
                    <label class="form-check-label" for="used-ad">Used</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="new-ad" value="new-ad">
                    <label class="form-check-label" for="new-ad">New</label>
                </div>
                <p class="font-weight-bolder mb-0">Price</p>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Php</span>
                    </div>
                    <input type="number" class="form-control" id="ad-price" placeholder="0.00">
                </div>
                <div class="form-group">
                    <label class="align-self-center font-weight-bolder" for="item-price">Item Location
                        <i class="mdi mdi-google-maps"></i>
                    </label>
                    <input type="hidden" name="country" id="countryId" value="PH"/>
                    <div class="row mx-auto">
                        <select name="state" class="form-control states order-alpha mb-2 col-md-6 col-sm-12" id="stateId">
                            <option value="">Select Region</option>
                        </select>
                        <select name="city" class="form-control cities order-alpha col-md-6 col-sm-12" id="cityId">
                            <option value="">Select City/Closest Location</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="post-ad-images" class="font-weight-bolder">Images</label>
                    <div class="input-images" id="post-ad-images" name="post-ad-images"></div>
                </div>
            </div>
            <div class="card-footer">
                <a type="button" href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-danger">Post Ad</button>
            </div>
        </form>
    </div>
</div>
@endsection
