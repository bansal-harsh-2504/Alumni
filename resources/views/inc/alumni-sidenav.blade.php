<div>
    <a id="admin-link" class="btn btn-warning" href="/alumni-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
        <button id="admin-link" class=" link2 btn btn-warning"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Logout</button>
    </form>
</div>