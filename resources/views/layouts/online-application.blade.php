<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.ilcb{
    border: 1px solid black;
    padding: 5px;
    float: left;
    margin-right:4%;
    }
.green{
    background-color: green;
    }
</style>
@yield('content')



