@extends('masterpage')
@section('content')
    
          <div class="container" >
          <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;" >
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            
        </nav>

        <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
    </div>
                
            <button type="button" class="btn btn-info"><a href="teams/create">ADDNEW</a></button>

                  <table class="table"">
                    <thead >
                      <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Leader</th>
                        <th>Handled</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $teamsIndex)
                      <tr>  
                        <td>{{$teamsIndex->id}}</td>
                        <td>{{$teamsIndex->name}}</td>
                        <td>{{$teamsIndex->description}}</td>
                        <td><img src="images/{{$teamsIndex->logo}}" alt="image" width="100px" height="70px"></td>
                        <td>{{$teamsIndex->leader}}</td>
                        <td><button type="submit" class="btn btn-warning"> <a href="teams/{{$teamsIndex->id}}/edit"> Edit </a> </button>

                            <form action="teams/{{$teamsIndex->id}}" method="post" >
                             {{ csrf_field() }}
                               {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger" > Delete </button></form> 
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                {{ $teams->links() }}
                </div>
@endsection

