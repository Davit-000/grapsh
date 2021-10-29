@extends('layouts.scenario')

@section('content')
  <div class="mb-3">
    <label for="region" class="form-label">Region</label>
    <input type="text" class="form-control" id="region" placeholder="region">
  </div>

  <div id="root"></div>

  <button type="button" class="btn btn-primary">Primary</button>

  <select id="boot-select" class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="form-group row">
    <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
    <div class="col-lg-4 col-md-9 col-sm-12">
      <input type="text" class="form-control" id="kt_datepicker_1" readonly placeholder="Select date"/>
    </div>
  </div>

  <div id="select-example" class="form-group row">
    <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
    <div class="col-lg-4 col-md-9 col-sm-12">
      <select class="form-control selectpicker">
        <option>Mustard</option>
        <option>Ketchup</option>
        <option>Relish</option>
      </select>
    </div>

  <br>

  <div class="card-group">
    <div class="card" id="image">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
          This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
          This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
@endsection


@section('script')
  <script type="text/javascript">
    var KTBootstrapDatepicker = function () {

      // Private functions
      var demos = function () {
        // minimum setup
        $('#kt_datepicker_1').datepicker({
          rtl: true,
          todayHighlight: true,
          orientation: "bottom left",
          templates: {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
          }
        });
      }

      return {
        // public functions
        init: function() {
          demos();
        }
      };
    }();

    jQuery(document).ready(function() {
      KTBootstrapDatepicker.init();
    });

    $.ajax('/api/posts', {
      method: 'GET',
      complete: function (data) {
        const ul = document.createElement('ul');

        ul.setAttribute('id', 'posts-ul');
        data.responseJSON.forEach(post => {
          const li = document.createElement('li');

          li.innerText = post.title;
          li.setAttribute('data-li', post.id);
          ul.appendChild(li);
        });

        document.querySelector('#root').appendChild(ul);
      }
    });
  </script>
@endsection
