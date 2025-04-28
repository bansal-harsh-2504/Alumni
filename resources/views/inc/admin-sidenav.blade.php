<div>
    <a id="admin-link" class="btn btn-warning" href="/admin-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Events"><i class="fa fa-empire"></i> Create events</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Alumni"><i class="fa fa-user"></i> Alumni</a>
    <div style="margin-top: 5px; !important;" class="accordion" id="accordionExample">
        <div style="padding: 0px !important;margin-top: 0px !important;background-color: goldenrod !important;" class="card">

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <i class="fa fa-edit"></i>&nbsp;<a href="/Notices">Create new post</a>
                    <hr>
                    <i class="fa fa-eye"></i>&nbsp;<a href="/Notices/all">View all posts</a>
                </div>
            </div>
        </div>


    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
    @csrf
    <button id="admin-link" class=" link2 btn btn-warning"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Logout</button>
    </form>
</div>