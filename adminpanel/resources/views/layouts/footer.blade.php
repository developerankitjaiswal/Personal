<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top">
    <i class="fa fa-angle-up"></i>
</a> 
</div>
<script src="{{asset('assets/js/vendor.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/app.min.js')}}" type="text/javascript"></script>
<!--Datatable--->
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<!----Select---->
<script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<!----Others---->
<script src="{{asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/toaster.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script>
    toastr.options = {
        "closeButton":true,
        "progressBar":true
    }
    @if(Session::has('success'))   
        toastr.success("{{ Session::get('success') }}");
    @elseif(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @elseif ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script> 
@yield('custom-javascript')
</body>
</html>