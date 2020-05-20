<div class="modal fade add-popup add-contact-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Add Contact</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <div class="form-group">
            <h5>Email  or  Username</h5>
            <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Josephin water"/>
            </div>
            <div class="form-group mb-0">
            <h5>Contact number</h5>
            <input class="form-control" id="examplemsg" type="number" placeholder="12345678912"/>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-danger button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
        </div>
    </div>
    </div>
</div>

<div class="modal pol-modal-main add-popup" id="pollModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title"><i data-feather="bar-chart-2"></i>poll</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <h3>create poll</h3>
            <div class="form-group">
            <input class="form-control" type="text" placeholder="ask que"/>
            <input class="form-control" type="text" placeholder="add commatn"/>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" placeholder="option 1"/>
            <input class="form-control" type="text" placeholder="option 2"/><a class="add-option" href="#">add an option</a>
            </div>
            <div class="form-group">
            <div class="post-poll">
                <ul>
                <li>post poll in
                    <p class="pt-0">test name</p>
                </li>
                <li>poll expier in 7 days
                    <p class="pt-0">test name</p>
                </li>
                </ul>
            </div>
            </div>
            <div class="form-group">
            <div class="allow-group">
                <input class="allow-check" type="checkbox"/>Allow users to vote anonymously
            </div>
            </div>
            <div class="creat-poll-btn"><a class="btn btn-primary button-effect btn-sm" href="#" data-dismiss="modal" aria-label="Close">Create poll</a></div>
        </form>
        </div>
    </div>
    </div>
</div>

<div class="modal notes-modal-main add-popup" id="notesModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title"><i class="ti-bookmark-alt"></i>notes</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body custom-scroll">
        <div class="card">
            <div class="card-header">
            <h5>Inline Editor</h5>
            </div>
            <div class="card-body">
            <div class="cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" id="area1" contenteditable="true" tabindex="0" spellcheck="false" role="textbox" aria-label="Rich Text Editor, area1" title="Rich Text Editor, area1">
                <h1>Your title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vulputate urna, sed dignissim arcu. Aliquam at ligula imperdiet, faucibus ante a, interdum enim. Sed in mauris a lectus lobortis condimentum. Sed in nunc magna. Quisque massa urna, cursus vitae commodo eget, rhoncus nec erat. Sed sapien turpis, elementum sit amet elit vitae, elementum gravida eros. In ornare tempus nibh ut lobortis. Nam venenatis justo ex, vitae vulputate neque laoreet a.</p>
            </div>
            </div>
            <div class="card-footer">
            <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
            <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="modal reminder-modal-main add-popup" id="setReminder" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
                    Set redminders</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="form default-form">
            <div class="lable">Reminder for (Groups or contacts)</div>
            <div class="form-group">
            <input class="form-control" type="text" placeholder="contact or channel"/>
            </div>
            <div class="lable">Remind about</div>
            <div class="form-group">
            <textarea class="form-control dib" rows="3" placeholder="Some details about task"></textarea>
            </div>
            <div class="lable">Remind about</div>
            <div class="form-group">
            <ul class="reminder-count">
                <li class="active">
                <div class="reminder-box">
                    <h3 class="remi-num">15</h3>
                    <h5 class="remi-val">minutes</h5>
                </div>
                </li>
                <li>
                <div class="reminder-box">
                    <h3 class="remi-num">1</h3>
                    <h5 class="remi-val">hour</h5>
                </div>
                </li>
                <li>
                <div class="reminder-box">
                    <h3 class="remi-num">5 PM</h3>
                    <h5 class="remi-val">today</h5>
                </div>
                </li>
            </ul>
            </div>
            <div class="form-group mb-0">
            <div class="lable">select custom time</div>
            <div class="custom-remider-main">
                <div class="custom-remider-content">
                <div class="custom-reminder-inline">
                    <input class="form-control" type="date"/>
                    <input class="form-control" type="time"/>
                </div>
                <div class="custom-reminder-block">
                    <select> 
                    <option>Do not repeat</option>
                    <option>Weekdays (Mon-Fri)</option>
                    <option>Daily</option>
                    <option>Weekly (Custom)</option>
                    </select>
                </div>
                </div>
            </div>
            </div>
            <div class="reminder-btn"><a class="btn btn-primary button-effect">set reminder</a></div>
        </form>
        </div>
    </div>
    </div>
</div>

<div class="modal snippet-modal-main add-popup" id="snippetModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title"><i class="fa fa-code"></i>code snippets</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <h3>creat snippets</h3>
            <div class="form-group">
            <input class="form-control" type="text" placeholder="title(optional)"/>
            </div>
            <div class="form-group">
            <select class="mb-0">
                <option>ebnf</option>
                <option>c++</option>
                <option>diff</option>
                <option>dart</option>
            </select>
            </div>
            <div class="form-group">
            <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
            <input class="form-control mb-0" type="text" placeholder="add commant (optional)"/>
            </div>
            <div class="form-group mb-0">
            <div class="btn-snipate"><a class="btn btn-danger button-effect btn-sm mr-3" href="#" data-dismiss="modal" aria-label="Close">Cancel</a><a class="btn btn-primary button-effect btn-sm" href="#" data-dismiss="modal" aria-label="Close">Create & post</a></div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="audiocall" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-body">
        <div class="audiocall1 call-modal"><img class="bg-img" src="../assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
        <div class="center-con text-center">
            <div class="title2">Josephin water</div>
            <h6>log angelina california</h6>
            <ul>
            <li><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#" data-toggle="modal" data-target="#audiorcvcall" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
            <li>     <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="viddiolog modal fade" id="videocall" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-body">
        <div class="videocall call-modal"><img class="bg-img" src="../assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/>
        <div class="small-image"><img class="bg-img" src="../assets/images/avtar/big/videocall.jpg" alt="Avatar"/></div>
        <div class="media videocall-details">
            <div class="usersprof">
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/2.jpg" alt="Avatar"/></div>
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/3.jpg" alt="Avatar"/></div>
            </div>
            <div class="media-body">
            <h5>Josephin water</h5>
            <h6>America ,California</h6>
            </div>
            <div id="basicUsage">00:00:00</div>
            <div class="zoomcontent"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()" data-tippy-content="Zoom Screen"><img src="../assets/images/logo/maximize.svg" alt="zoom screen"/></a></div>
        </div>
        <div class="center-con text-center">
            <ul>
            <li><a class="icon-btn btn-light button-effect pause" href="#" data-tippy-content="Hold"><i class="ti-control-pause"></i></a></li>
            <li><a class="icon-btn btn-danger button-effect btn-xl is-animating" href="#" data-dismiss="modal" data-tippy-content="Hangup"> <i data-feather="phone"></i></a></li>
            <li><a class="icon-btn btn-light button-effect mic" href="#" data-tippy-content="Mute"><i class="fa fa-microphone"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="confercall" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-body">
        <div class="conferencecall call-modal"><img class="bg-img" src="../assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
        <div class="center-con text-center">
            <div class="usersprof">
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/2.jpg" alt="Avatar"/></div>
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/3.jpg" alt="Avatar"/></div>
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/5.jpg" alt="Avatar"/></div>
            <div class="profile"><img class="bg-img" src="../assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/></div>
            </div>
            <p>Incoming Call</p>
            <h3>Conference Call</h3>
            <ul>
            <li>     <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
            <li><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#"> <i data-feather="video"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="confvideocl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
        <div class="modal-body">
        <div class="row confimg">
            <div class="col-6">
            <div class="vclimg"><img class="bg-img" src="../assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/></div>
            </div>
            <div class="col-6">
            <div class="vclimg"><img class="bg-img" src="../assets/images/avtar/5.jpg" alt="Avatar"/></div>
            </div>
            <div class="col-6">
            <div class="vclimg"><img class="bg-img" src="../assets/images/avtar/2.jpg" alt="Avatar"/></div>
            </div>
            <div class="col-6">
            <div class="vclimg"><img class="bg-img" src="../assets/images/avtar/3.jpg" alt="Avatar"/></div>
            </div>
        </div>
        </div>
        <div class="modal-footer clfooter">
        <div id="basicUsage3">00:00:00</div>
        <ul> 
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="speaker"><i data-feather="volume-2"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Camera"><i data-feather="camera-off"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
            <li><a class="icon-btn btn-danger button-effect btn-sm is-animating" href="#" data-dismiss="modal" data-tippy-content="Hangup"><i data-feather="phone"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Disable Video"><i data-feather="video-off"></i></a></li>
            <li><a class="icon-btn btn-light button-effect mic" href="#" data-tippy-content="Mute"><i data-feather="mic-off"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Hold"><i data-feather="pause"></i></a></li>
        </ul>
        </div>
    </div>
    </div>
</div>

<div class="modal fade audiorcvcall" id="audiorcvcall" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-body">
        <div class="audiocall2 call-modal"><img class="bg-img" src="../assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
        <div class="center-con text-center">
            <div id="basicUsage2">00:00:00</div>
            <div class="title2">Josephin water</div>
            <h6>log angelina california</h6>
            <ul>
            <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Mute"><i class="fa fa-microphone"></i></a></li>
            <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Speaker"><i class="fa fa-volume-up"></i></a></li>
            <li><a class="icon-btn btn-danger button-effect btn-xl is-animating" href="#" data-tippy-content="Hangup" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Pause"><i data-feather="pause"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="modal fade fev-addcall-main add-popup" id="addcallmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Add Contact</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <div class="form-group">
            <h5>Email  or  Username</h5>
            <input class="form-control" id="exampleInputEmail12" type="text" placeholder="Josephin water"/>
            </div>
            <div class="form-group">
            <h5>Contact number</h5>
            <input class="form-control" id="examplemsg2" type="number" placeholder="12345678912"/>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-danger button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade add-popup todo-main-modal" id="todoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Welcome to Chitchat</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <div class="todo-task">
            <h5>Felling Lonely</h5>
            <div class="todo-main-content">
                <div class="form-group">
                <input type="checkbox" aria-label="Checkbox for following text input"/>
                <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings "/>
                </div>
                <div class="drop-picker">
                <div class="dropdown currency" tabindex="1">
                    <div class="select"><span>Assign To</span></div>
                    <input type="hidden" name="currency"/>
                    <ul class="dropdown-menu">
                    <li class="dropdown-divider">
                        <div class="fa fa-user text-muted"></div>
                        <h5 class="text-muted">Assign To</h5>
                    </li>
                    <li>Josephin john</li>
                    <li>Lynetin john</li>
                    <li>Sufiya john</li>
                    <li>Jhon john</li>
                    </ul>
                </div>
                <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date"/>
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
        <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade add-popup create-todo-main-modal" id="createtodoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Today's ToDo</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <form class="default-form">
            <div class="todo-task">
            <h5>Felling Lonely</h5>
            <div class="todo-main-content">
                <div class="form-group">
                <input type="checkbox" aria-label="Checkbox for following text input"/>
                <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings "/>
                </div>
                <div class="drop-picker">
                <div class="dropdown currency" tabindex="1">
                    <div class="select"><span>Assign To</span></div>
                    <input type="hidden" name="currency"/>
                    <ul class="dropdown-menu">
                    <li class="dropdown-divider">
                        <div class="fa fa-user text-muted"></div>
                        <h5 class="text-muted">Assign To</h5>
                    </li>
                    <li>Josephin john</li>
                    <li>Lynetin john</li>
                    <li>Sufiya john</li>
                    <li>Jhon john</li>
                    </ul>
                </div>
                <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date"/>
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
        <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade add-popup msg-chat-modal" id="msgchatModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Create New Message</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <div class="chat-msg-search">
            <div class="input-group">
            <input class="form-control" type="text" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon21"/>
            <div class="input-group-append"><span class="input-group-text" id="basic-addon21">@</span></div>
            </div>
        </div>
        <ul class="chat-main custom-scroll">
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile offline"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Josephin water</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>22/10/19</h6>
                <h6 class="font-success status"> Seen</h6>
                </div>
            </div>
            </li>
            <li class="active" data-to="chating">
            <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6>Typing................</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>30/11/19</h6>
                <div class="badge badge-primary sm">8</div>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="../assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Sufiya Elija</h5>
                <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>15/06/19</h6>
                <h6 class="font-dark status"> Sending</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="../assets/images/contact/4.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Mukrani Pabelo</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>04/06/19</h6>
                <h6 class="font-danger status"> Failed</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jhon Deo</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>04/06/19</h6>
                <h6 class="font-danger status"> Failed</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Pabelo Mukrani</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>04/06/19</h6>
                <h6 class="font-danger status"> Failed</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="../assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Sufiya Elija</h5>
                <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>15/06/19</h6>
                <h6 class="font-dark status"> Sending</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="../assets/images/contact/4.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Mukrani Pabelo</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>04/06/19</h6>
                <h6 class="font-danger status"> Failed</h6>
                </div>
            </div>
            </li>
            <li data-to="blank">
            <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jhon Deo</h5>
                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status"><i class="ti-pin2"></i>
                <h6>04/06/19</h6>
                <h6 class="font-danger status"> Failed</h6>
                </div>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </div>
</div>

<div class="modal fade add-popup msg-chat-modal" id="msgcallModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title">
            Create New Message</h2>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <div class="chat-msg-search">
            <div class="input-group">
            <input class="form-control" type="text" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon20"/>
            <div class="input-group-append"><span class="input-group-text" id="basic-addon20">@</span></div>
            </div>
        </div>
        <ul class="call-log-main custom-scroll">
            <li class="active">
            <div class="call-box">
                <div class="profile offline"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                </div>
            </div>
            </li>
            <li>
            <div class="call-box">
                <div class="profile online"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                </div>
            </div>
            </li>
            <li>
            <div class="call-box">
                <div class="profile offline"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                </div>
            </div>
            </li>
            <li>
            <div class="call-box">
                <div class="profile online"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                </div>
            </div>
            </li>
            <li>
            <div class="call-box">
                <div class="profile offline"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                </div>
            </div>
            </li>
            <li>
            <div class="call-box">
                <div class="profile online"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                <h5>Jony Lynetin</h5>
                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                </div>
                <div class="call-status">
                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                </div>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="itemdetailmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-body">
        <div class="no-internet animat-rate">
            <div class="connection-img"><img class="left-img" src="../assets/images/disconnect/3.png" alt="Disconnected"><img class="right-img" src="../assets/images/disconnect/2.png" alt="Disconnected internet"></div>
            <div class="quarterCircle">
            <div class="close-btn" data-dismiss="modal"><span aria-hidden="true">×</span></div>
            </div>
            <div class="bg_circle">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            </div>
            <div class="cross"></div>
            <div class="cross1"></div>
            <div class="dot"></div>
            <div class="dot1"></div>
            <div class="content text-center"><a class="icon-btn btn-danger button-effect btn-sm is-animating" href="#"><i class="fa fa-wifi"></i></a>
            <h5>Internet issue</h5>
            <div class="title2">Disconnected</div>
            <button class="btn reconnect-btn" type="button" data-dismiss="modal">Add to Cart</button>
            </div>
        </div>
        </div>
    </div>
</div>