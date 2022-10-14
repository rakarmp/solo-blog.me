<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('admin.FE-admin.link')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin.FE-admin.loading')
  @include('admin.FE-admin.navbar')
  @include('admin.FE-admin.sidebar')
  @include('admin.FE-admin.content')
  @include('admin.FE-admin.footer')
  @include('admin.FE-admin.control-sidebar')

</div>
@include('admin.BE-admin.script')
</body>
</html>
