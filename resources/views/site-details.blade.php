<x-app-layout pagetitle="Detail page">
  <style>
    .table {
      text-align: left;
      width: 100%;
    }
    .overview-table {
      background: #fff;
      box-shadow: 3px 5px 35px rgb(86 68 169 / 10%);
      border-radius: 10px;
      margin-top: 20px;
      margin-bottom: 0;
    }


    .overview-table tr th {
      color: #2d373c;
    }

    .overview-table tr td {
      color: #ff4838
    }


    .overview-table tr th, .overview-table tr td {
      font-weight: 600;
      font-size: 18px;
      padding: 15px 0 15px 20px;
    }
  </style>
  <x-head image='../img/breadcrumb-bg.png' title="Баба Вида" link="Баба Вида"/>
  {{--  Container--}}
  <div class="max-w-3xl mx-auto mb-32">
    {{--  Content--}}
    <div>
      <img src="{{url('img/baba-vida-1.jpg')}}" class="w-100 mb-2 sm:mb-6" alt="bv">
      <div>
        <h2 class="text-4xl font-semibold text-gray-900 py-6">
          Открийте средновековието
        </h2>
        <p class="py-4 text-gray-700">
          Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt
          blandit
          interdum. Sed pellentesque at nunc eget consente Duis rutrum nisl urna. Maecenas vel libero faucibus nisiteden
          venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente andit
          consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Maecenas
          Suspendissendt blandit interdum. libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit
          interdum.
          Sed pellentesque at nunc consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis
          hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc consectetur.Duis rutrum nisl
          urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed
          pellentesque at nunc consectetur.Duis rutrum nisl urna.
        </p>
      </div>
    </div>
    {{--      Map--}}
    <div class="w-100 mt-4 sm:mt-6">
      <h2 class="text-4xl font-semibold text-gray-900 py-6">
        Карта
      </h2>
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11481.462713941331!2d22.8864527!3d43.9931659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4753798d7c472e1d%3A0x9f1823d30e6ca936!2z0KHRgNC10LTQvdC-0LLQtdC60L7QstC90LAg0JrRgNC10L_QvtGB0YIg0JHQsNCx0LAg0JLQuNC00LA!5e0!3m2!1sbg!2sbg!4v1677258277198!5m2!1sbg!2sbg"
          style="width: 100%; height: 29em; border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    
    {{--    Table--}}
{{--    <table class="table overview-table">--}}
{{--      <tbody>--}}
{{--      <tr>--}}
{{--        <th>Destination</th>--}}
{{--        <td>New York City</td>--}}
{{--      </tr>--}}
{{--      <tr>--}}
{{--        <th>Departure</th>--}}
{{--        <td>Yes Required</td>--}}
{{--      </tr>--}}
{{--      <tr>--}}
{{--        <th>Departure Time</th>--}}
{{--        <td>01 April, 2021 <span>10.00AM</span></td>--}}
{{--      </tr>--}}
{{--      <tr>--}}
{{--        <th>Return Time</th>--}}
{{--        <td>08 April, 2021 <span>10.00AM</span></td>--}}
{{--      </tr>--}}
{{--      </tbody>--}}
{{--    </table>--}}
  </div>
</x-app-layout>
