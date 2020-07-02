<div class="modal fade" id="edit-item-post" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-self-center" id="edit-modal-label">Edit Post - ID: <strong
                            class="post-id"> 3G8733D112</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="font-weight-bolder" for="item-name">Item Name</label>
                        <input type="text" class="form-control" id="item-name" placeholder="Vans Sk8-Hi MTE Shoes">
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
                            <div id="editor" maxlength="1000" contenteditable>
                                The Vans All-Weather MTE Collection features footwear and apparel designed to withstand
                                the elements whilst still looking cool. <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Condimentum id venenatis a condimentum. <br>
                                Adipiscing enim eu turpis egestas pretium aenean. <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Condimentum id venenatis a condimentum. <br>
                                Adipiscing enim eu turpis egestas pretium aenean.
                            </div>
                            <textarea class="item-desc" name="ticketDesc" id="editorCopy" required="required"
                                style="display:none;" maxlength="1000">
                                    </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <label class="mx-2 align-self-center font-weight-bolder" for="item-price">Item Price</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#8369; </span>
                            </div>
                            <input type="Number" class="form-control" id="item-price" placeholder="5000">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mx-2 align-self-center font-weight-bolder" for="item-price">Item Location <i
                                class="mdi mdi-google-maps"></i></label>
                        <input type="text" class="form-control" id="item-location" placeholder="Baguio City">
                    </div>
                    <div class="form-group">
                        <input type="file" class="fcustom-file-input" name="item-img-upload" id="item-img-upload"
                            accept="image/*" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
