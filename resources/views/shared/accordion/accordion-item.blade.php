
@if(@isset($layoutType) && ($layoutType == config('constants.layoutType.RANK_CALCULATOR')))
    <div class="card accordion-item">
        <div class="card-header" id="faq-{{$iteamId}}">
            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{$iteamId}}" aria-expanded="true"
                aria-controls="faq-collapse-{{$iteamId}}">Batting Points</button>
        </div>
        <!--/.card-header -->
        <div id="faq-collapse-{{$iteamId}}" class="accordion-collapse collapse" aria-labelledby="faq-{{$iteamId}}">
            <div class="card-body">
            <section id="snippet-7" class="wrapper">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <!-- <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead> -->
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Run scored</td>
                        <td>1 point</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Four runs (off one ball) bonus</td>
                        <td>2 points</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Four runs (off one ball) bonus</td>
                        <td>2 points</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Between 100.00 and 124.99 runs per 100 balls:</td>
                        <td>	10 points</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Dismissed for duck</td>
                        <td>-10 points</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Strike Rate Between 0.00 and 49.99 runs per 100 balls:</td>
                        <td>-10 points</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </section>
            </div>
            <!--/.card-body -->
        </div>
        <!--/.accordion-collapse -->
    </div>

@else
    <div class="card accordion-item">
        <div class="card-header" id="faq-{{$iteamId}}">
            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{$iteamId}}" aria-expanded="true"
                aria-controls="faq-collapse-1">Where can I order custom apparels and other equipment ?</button>
        </div>
        <!--/.card-header -->
        <div id="faq-collapse-{{$iteamId}}" class="accordion-collapse collapse" aria-labelledby="faq-{{$iteamId}}">
            <div class="card-body">
                <p>You can order high quality customizable jerseys, cricket balls, bats and LED Scoreboard at CricSotres</p>
            </div>
            <!--/.card-body -->
        </div>
        <!--/.accordion-collapse -->
    </div>
@endif
