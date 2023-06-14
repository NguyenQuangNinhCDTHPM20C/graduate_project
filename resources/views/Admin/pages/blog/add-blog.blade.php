@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('styles')
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        input[readonly] {
            background-color: white !important;
            cursor: text !important;
        }

        /* this is only due to codepen display don't use this outside of codepen */
        .container {
            padding-top: 20px;
        }

        ul.wysihtml5-toolbar {
            margin: 0;
            padding: 0;
            display: block;
        }

        ul.wysihtml5-toolbar>li {
            float: left;
            display: list-item;
            list-style: none;
            margin: 0 5px 10px 0;
        }

        .dropdown,
        .dropup {
            position: relative;
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        ul.wysihtml5-toolbar a[data-wysihtml5-command=bold] {
            font-weight: bold;
        }

        ul.wysihtml5-toolbar a[data-wysihtml5-command=italic] {
            font-style: italic;
        }

        ul.wysihtml5-toolbar a[data-wysihtml5-command=underline] {
            text-decoration: underline;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }

        ul.wysihtml5-toolbar>li {
            float: left;
            display: list-item;
            list-style: none;
            margin: 0 5px 10px 0;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle;
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Blog</h4>
                    <h6>Create the new blog</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" placeholder="Title" />
                                    </div>
                                    <div class="form-group">
                                        <label> Image </label>
                                        <div class="input-group">

                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse <input type="file" name="bimgs" multiple>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wysihtml5-toolbar" style="">
                                            <li class="dropdown">
                                                <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">

                                                    <span class="glyphicon glyphicon-font"><i
                                                            class="fas fa-font"></i></span>

                                                    <span class="current-font">Normal text</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="p" tabindex="-1"
                                                            href="javascript:;" unselectable="on"
                                                            class="wysihtml5-command-active">Normal text</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h1" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 1</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h2" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 2</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h3" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 3</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h4" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 4</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h5" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 5</a></li>
                                                    <li><a data-wysihtml5-command="formatBlock"
                                                            data-wysihtml5-command-value="h6" tabindex="-1"
                                                            href="javascript:;" unselectable="on">Heading 6</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="btn-group">
                                                    <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B"
                                                        tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                                                    <a class="btn btn-default" data-wysihtml5-command="italic"
                                                        title="CTRL+I" tabindex="-1" href="javascript:;"
                                                        unselectable="on">Italic</a>
                                                    <a class="btn btn-default" data-wysihtml5-command="underline"
                                                        title="CTRL+U" tabindex="-1" href="javascript:;"
                                                        unselectable="on">Underline</a>

                                                    <a class="btn btn-default" data-wysihtml5-command="small" title="CTRL+S"
                                                        tabindex="-1" href="javascript:;" unselectable="on">Small</a>

                                                </div>
                                            </li>
                                            <li>
                                                <a class="btn btn-default" data-wysihtml5-command="formatBlock"
                                                    data-wysihtml5-command-value="blockquote"
                                                    data-wysihtml5-display-format-name="false" tabindex="-1"
                                                    href="javascript:;" unselectable="on">

                                                    <span class="glyphicon glyphicon-quote"><i
                                                            class="fas fa-quote-left"></i></span>

                                                </a>
                                            </li>
                                            <li>
                                                <div class="btn-group">
                                                    <a class="btn btn-default"
                                                        data-wysihtml5-command="insertUnorderedList"
                                                        title="Unordered list" tabindex="-1" href="javascript:;"
                                                        unselectable="on">

                                                        <span class="glyphicon glyphicon-list"><i
                                                                class="fas fa-list-ul"></i></span>

                                                    </a>
                                                    <a class="btn btn-default" data-wysihtml5-command="insertOrderedList"
                                                        title="Ordered list" tabindex="-1" href="javascript:;"
                                                        unselectable="on">

                                                        <span class="glyphicon glyphicon-th-list"><i
                                                                class="fas fa-th-list"></i></span>

                                                    </a>
                                                    <a class="btn btn-default" data-wysihtml5-command="Outdent"
                                                        title="Outdent" tabindex="-1" href="javascript:;"
                                                        unselectable="on">

                                                        <span class="glyphicon glyphicon-indent-right"><i
                                                                class="fa fa-solid fa-outdent"></i></span>

                                                    </a>
                                                    <a class="btn btn-default" data-wysihtml5-command="Indent"
                                                        title="Indent" tabindex="-1" href="javascript:;"
                                                        unselectable="on">

                                                        <span class="glyphicon glyphicon-indent-left"><i
                                                                class="fa fa-solid fa-indent"></i></span>

                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bootstrap-wysihtml5-insert-link-modal modal fade"
                                                    data-wysihtml5-dialog="createLink">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <a class="close" data-dismiss="modal">×</a>
                                                                <h3>Insert link</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input value="http://"
                                                                        class="bootstrap-wysihtml5-insert-link-url form-control"
                                                                        data-wysihtml5-dialog-field="href">
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"
                                                                            class="bootstrap-wysihtml5-insert-link-target"
                                                                            checked="">Open link in new window
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a class="btn btn-default" data-dismiss="modal"
                                                                    data-wysihtml5-dialog-action="cancel"
                                                                    href="#">Cancel</a>
                                                                <a href="#" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    data-wysihtml5-dialog-action="save">Insert link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-default" data-wysihtml5-command="createLink"
                                                    title="Insert link" tabindex="-1" href="javascript:;"
                                                    unselectable="on">
                                                    <span class="glyphicon glyphicon-share"><i
                                                            class="far fa-share-square"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <textarea class="form-control bcontent" name="content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="Submit" value="Publish"
                                            class="btn btn-primary form-control" />
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
@endsection
@section('scripts')
    <script>
        $(function() {
            $(".bcontent").wysihtml5({
                toolbar: {
                    "image": false
                }
            });

            $(document).on('change', '.btn-file :file', function() {
                var input = $(this);
                var numFiles = input.get(0).files ? input.get(0).files.length : 1;
                console.log(input.get(0).files);
                var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });

            $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                var input = $(this).parents('.input-group').find(':text');
                var log = numFiles > 1 ? numFiles + ' files selected' : label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) {
                        alert(log);
                    }
                }

            });
        });
    </script>
@endsection
