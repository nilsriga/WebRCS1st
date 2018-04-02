@extends('layout')

@section('content')

<main>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab_image">
                    <img imadze src="resources/placeholder.jpg" class="col-lg-4" alt="">
                </div>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum</div>
</div>

                
                <div class="col-xs-12">
                    <h1>Contacts</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=pils%20iela%2012&key=AIzaSyD4ZT1ivf99zLV3SJiV4ODVg-pcGcr5PuI"
                        allowfullscreen></iframe>

                </div>
                <div class="col-xs-7">
                    <h2>Adress</h2>
                    <p>Pils laukums 12, 3, Rīga, LV-1201, Latvia</p>
                    <h2>Email</h2>
                    <p>info@amuseyourself.com</p>
                    <h2>Phone</h2>
                    <p>+371 2323484</p>
                </div>
            </div>
        </div>
    </main>

     @endsection