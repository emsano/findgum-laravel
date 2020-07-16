<template>
    <div class="container-fluid admin-posts">
        <div class="card shadow">
            <h5 class="card-header bg-dark text-white"><i class="mdi mdi-magnify-scan"></i> {{ where }}</h5>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="view-post-title font-weight-bolder">Title</label>
                        <input type="text" class="form-control" id="post-title" placeholder=""
                            :value='postItem[0].Posting'>
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
                            <div class="border" id="editor" maxlength="1000" contenteditable
                                v-html="postItem[0].PostDesc">
                                {{  postItem[0].PostDesc  }}
                            </div>
                            <textarea class="item-desc" name="ticketDesc" id="editorCopy" required="required"
                                style="display:none;" maxlength="1000" :value="postItem[0].PostDesc">
                                    </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <label class="align-self-center font-weight-bolder" for="item-price">Item Price &nbsp;</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#8369; </span>
                            </div>
                            <input type="Number" class="form-control" id="item-price" placeholder=""
                                :value='postItem[0].UnitPrice'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="align-self-center font-weight-bolder" for="item-price">Item Location <i
                                class="mdi mdi-google-maps"></i></label>
                        <input type="text" class="form-control" id="item-location" placeholder=""
                            :value='postItem[0].City'>
                    </div>
                    <div class="form-group">
                        <label class="align-self-center font-weight-bolder" for="post-user">Posted By</label>
                        <!-- <input type="text" class="form-control" id="post-user" value="" disabled readonly> -->
                        <a name="post-user" id="post-user" class="btn btn-warning" :href='postUserRoute'>{{ postItem[0].FirstName }}</a>
                    </div>
                    <div class="form-group">
                        <input type="file" class="fcustom-file-input" name="item-img-upload" id="post-item-img-upload"
                            accept="image/*" multiple>
                    </div>
                    <div class="form-group">
                        <label for="post-status" class="mx-2 align-self-center font-weight-bolder">Post Status</label>
                        <select v-model="selectedStatus" class="form-control" name="post-status" id="post-status">
                            <option value="D" :selected="selectedStatus == 'D'">Draft</option>
                            <option value="E" :selected="selectedStatus == 'E'">Expired</option>
                            <option value="G" :selected="selectedStatus == 'G'">For Approval</option>
                            <option value="P" :selected="selectedStatus == 'P'">Posted</option>
                            <option value="T" :selected="selectedStatus == 'T'">Trash</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['where', 'post-id', 'post-images', 'post-item', 'post-user-route'],
        methods: {
            getImages: function () {
                var img = [];
                this.postImages.forEach(element => {
                    img.push(element.ImageUrl);
                });
                // this.img = img;

                $("#post-item-img-upload").fileinput({
                    uploadExtraData: {
                        _token: "{{csrf_token()}}"
                    },
                    uploadUrl: "upload-images",
                    deleteUrl: "delete-images",
                    initialPreview: img,
                    initialPreviewAsData: true,
                    overwriteInitial: false,
                    allowedFileTypes: ['image'],
                    maxFileCount: 10,
                    maxTotalFileCount: 10,
                    multiple: true,
                    dragDrop: true,
                    showPreview: true,
                    showDelete: true,
                    filePlural: true,
                    initialPreviewShowDelete: true,
                    showRemove: true,
                    fileActionSettings: {
                        initialPreviewShowDelete: true,
                        showRemove: true
                    }
                });
            },
            decodeDesc: function () {
                this.postItem[0].PostDesc = Base64.decode(this.postItem[0].PostDesc);
                this.postItem[0].City = Base64.decode(this.postItem[0].City);
            }
        },
        created: function () {
            this.decodeDesc();
        },
        mounted() {
            this.getImages();
            // console.log('Admin View Post Component mounted.')
        },
        data() {
            return {
                selectedStatus: this.postItem[0].StatusCode
            }
        }
    }

</script>
