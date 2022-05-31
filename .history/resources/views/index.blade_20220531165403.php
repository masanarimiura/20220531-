@extends('layouts.default')
<!-- layoutsディレクトの親レイアウト default.php の設定を extends するってこと。 -->
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'index.blade.php')
<!-- @secrion('継承するセクション名', 親のファイル名) -->
@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <!-- Auth -->
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->name}}
    </td>
    <td>
      {{$item->age}}
    </td>
    <td>
      {{$item->nationality}}
    </td>
  </tr>
  @endforeach
</table>
@endsection