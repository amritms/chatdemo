@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Chat Room</div>
              <div class="panel-body">
                <div id="app">
                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>


                </div>
              </div>
          </div>
      </div>
</div>
@endsection
