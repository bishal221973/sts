<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/style.css') }}">
{{-- <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}


<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<style>
    .time-list {
        position: relative;
    }

    .time-list.active {
        display: block !important;
    }

    .time-list input {
        position: absolute;
        display: block;
        height: 100%;
        top: 0;
        cursor: pointer;
        left: 0;
        width: 100%;
        opacity: 0;
    }

    .time-list.isChecked {
        background-color: red !important;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(22, 1fr);
        /* Three equal-width columns */
        gap: 5px;
        /* Gap between grid items */
        width: 100%;
        /* Adjust the width as needed */
        margin: 0 auto;
        /* Center the grid container */
    }
    .grid1 {
        display: grid;
        grid-template-columns: repeat(18, 1fr);
        /* Three equal-width columns */
        gap: 5px;
        /* Gap between grid items */
        width: 100%;
        /* Adjust the width as needed */
        margin: 0 auto;
        /* Center the grid container */
    }

    /* Style the grid items */
    .grid-item {
            background-color: #909090;
        color: #fff;
        padding: 1px;
        text-align: center;
        cursor: pointer;
        position: relative;
    }
    .opacity-0{
        opacity: 0;
        cursor: default;
        pointer-events: none;
    }
    .top-item{
        width: max-content !important;
        padding-left: 10px;
        padding-right: 10px;
    }
    .top-item div{
        height: 20px;
        width: 20px;
    }
    .top-item .available{
        background-color: #909090;
    }
    .top-item .selected{
        background-color: green;
    }
    .top-item .booked{
        background-color: brown;
    }
    .top-item .sold{
        background-color: red;
    }
    .top-menu-selected{
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .screen{
        background-color: brown;
        margin-top: 20px;
        height: 100px;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        color: #fff;
    }

    .grid-item input{
        position: absolute;
        display:block;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
        opacity: 0;
    }
    .grid-item.isChecked{
        background-color: green !important;
    }
    .grid-item.booked{
        background-color: brown !important;
        cursor:none !important;
        pointer-events: none !important;
    }
    .zoom{
        cursor: pointer;
        overflow: hidden;
        border-radius: 10px;
        position: relative;
    }
    .movieThumbnail{
        height: 300px;
        width: 250px;
        background-position: center;
        background-size:cover;
        transition: 1s;
    }
    .zoom:hover .movieThumbnail{
        transform: scale(1.1);
    }
    .movieDetail{
        position: absolute;
        bottom:-150px;
        background-color: rgba(0, 0, 0, 0.5);
        transition: 1s;
    }
    .zoom:hover .movieDetail{
        bottom: 0;
    }
    .movieSeatCount{
        position: absolute;
        top: 5px;
        right: 0;
        background-color: #138496;
        height: 25px;
        width: 130px;
        /* border-radius: 50%; */
        display: flex;
        justify-content: center;
        align-items: center;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        color: #fff;
    }
    .cursur-pointer{
        cursor: pointer;
    }
    #imagePreview{
        position: absolute;
        top:0;
        height: 355px;
        border: 1px dashed #ccc;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
