<div class="col-sm-12 col-xs-12">
  <div class="card">
    <div class="card-heading bg-primary">
      <div class="card-title">{{ ucwords($page) }}</div>
    </div>
    <div class="card-offset">
      <div class="card-offset-item text-right">
        <button class="btn-raised btn btn-info btn-circle btn-lg" id="add-team-btn" type="button">
          <em class="ion-android-add"></em>
        </button>
      </div>
    </div>
    <div class="card-body pt0">
      <p class="mb-sm">
        To add a new team member you have to click on the + button on the top right-corner, 
        You can also edit team information
      </p>
    </div>
  </div>
</div>

<!-- Add Software modal-->
<div class="modal fade" id="show-add-team-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p>Add new team member</p>
      </div>
      <div class="modal-body">
        <form method="post" id="add-team-form" onsubmit="return addTeamMemeber()">
          <input type="hidden" id="avatar" name="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First name?</label>
                <input type="text" id="first_name" class="form-control" placeholder="Enter first name.." name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last name?</label>
                <input type="text" id="last_name" class="form-control" placeholder="Enter last name.." name="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Email?</label>
                <input type="email" id="email" class="form-control" placeholder="Enter email address.." name="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Job Role?</label>
                <select class="form-control" id="job_role">
                  <option value="Founder/CEO">Founder/CEO</option>
                  <option value="Senior Consultant">Senior Consultant</option>
                  <option value="Business Manager">Business Manager</option>
                  <option value="Data Analyst">Data Analyst</option>
                  <option value="Research Analyst">Data Analyst</option>
                  <option value="HR">HR (Human Resource)</option>
                  <option value="Senior Programmer">Senior Programmer</option>
                  <option value="Trainee Programmer">Trainee Programmer</option>
                  <option value="Experienced Programmer">Experienced Programmer</option>
                  <option value="Software Developer">Software Developer</option>
                  <option value="Software Engineer">Software Engineer</option>
                  <option value="Information Security Analyst">Information Security Analyst</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>A Little Description?</label>
            <textarea cols="20" rows="5" class="form-control" placeholder="Describe a little about yourself..." id="bio_description"></textarea>
          </div>

          <div class="form-group">
            <label>A Picture of yourself.?</label>
            <a href="javascript:void(0);" id="upload_widget_opener">
              <i class="fa fa-camera-o"></i>
              Choose a photo
            </a>
          </div>

          <div class="form-group">
            <div id="preview-avatar" class="card card-body"></div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary">
              Add
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="pull-left">
          <button class="btn btn-flat" type="button" data-dismiss="modal">
            <em class="ion-arrow-left-c icon-24"></em>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Software modal-->
<div class="modal fade" id="show-edit-team-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p>Add new team member</p>
      </div>
      <div class="modal-body">
        <form method="post" id="edit-team-form" onsubmit="return updateTeamMemeber()">
          <input type="hidden" id="edit_avatar" name="">
          <input type="hidden" id="member_id" name="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First name?</label>
                <input type="text" id="edit_first_name" class="form-control" placeholder="Enter first name.." name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last name?</label>
                <input type="text" id="edit_last_name" class="form-control" placeholder="Enter last name.." name="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Email?</label>
                <input type="email" id="edit_email" class="form-control" placeholder="Enter email address.." name="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Job Role?</label>
                <select class="form-control" id="edit_job_role">
                  <option value="Founder/CEO">Founder/CEO</option>
                  <option value="Senior Consultant">Senior Consultant</option>
                  <option value="Senior Programmer">Senior Programmer</option>
                  <option value="Business Manager">Business Manager</option>
                  <option value="Data Analyst">Data Analyst</option>
                  <option value="Research Analyst">Data Analyst</option>
                  <option value="HR">HR (Human Resource)</option>
                  <option value="Trainee Programmer">Trainee Programmer</option>
                  <option value="Experienced Programmer">Experienced Programmer</option>
                  <option value="Software Developer">Software Developer</option>
                  <option value="Software Engineer">Software Engineer</option>
                  <option value="Information Security Analyst">Information Security Analyst</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>A Little Description?</label>
            <textarea cols="20" rows="5" class="form-control" placeholder="Describe a little about yourself..." id="edit_bio_description"></textarea>
          </div>

          <div class="form-group">
            <label>A Picture of yourself.?</label>
            <a href="javascript:void(0);" id="edit_upload_widget_opener">
              <i class="fa fa-camera-o"></i>
              Choose a photo
            </a>
          </div>

          <div class="form-group">
            <div id="edit-preview-avatar" class="card card-body"></div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary">
              Update
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="pull-right">
          <button class="btn btn-flat" type="button" onclick="deleteMember()">
            <em class="ion-trash-a icon-24"></em>
          </button>
        </div>
        <div class="pull-left">
          <button class="btn btn-flat" type="button" data-dismiss="modal">
            <em class="ion-arrow-left-c icon-24"></em>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>