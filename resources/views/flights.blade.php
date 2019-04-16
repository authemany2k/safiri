@extends('layouts.app')

@section('content')
    <div class="theme-hero-area front">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg theme-hero-area-bg-blur" style="background-image:url({{asset('img/1500x800.png')}});"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <form class="_pb-50 _pt-100 _pv-mob-50">
            <div class="theme-search-area _mob-h theme-search-area-white">
              <div class="theme-search-area-header _mb-20">
                <h1 class="theme-search-area-title theme-search-area-title-sm">{{count($flights)}} Flights to {{app('request')->query('to', 'London')}}</h1>
              </div>
              <div class="theme-search-area-form" id="hero-search-form">
                <div class="row" data-gutter="10">
                  <div class="col-md-5 ">
                    <div class="row" data-gutter="10">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">From</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <input name="from" class="theme-search-area-section-input typeahead" value="New York, United States" type="text" placeholder="Departure" data-provide="typeahead"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">To</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <input name="to" class="theme-search-area-section-input typeahead" value="London, United Kindom" type="text" placeholder="Arrival" data-provide="typeahead"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="row" data-gutter="10">
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">Depart</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="departure" class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                            <input name="departure" class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">Arrival</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="arrival" class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                            <input name="arrival" class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Passengers">
                          <label class="theme-search-area-section-label _op-06">Passengers</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-people"></i>
                            <input name="passengers" class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                            <div class="quantity-selector-box" id="FlySearchPassengers">
                              <div class="quantity-selector-inner">
                                <p class="quantity-selector-title">Passengers</p>
                                <ul class="quantity-selector-controls">
                                  <li class="quantity-selector-decrement">
                                    <a href="#">&#45;</a>
                                  </li>
                                  <li class="quantity-selector-current">1</li>
                                  <li class="quantity-selector-increment">
                                    <a href="#">&#43;</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 ">
                    <button class="theme-search-area-submit _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-no-border theme-search-area-submit-primary">Edit</button>
                  </div>
                </div>
              </div>
              <div class="theme-search-area-options clearfix">
                <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                  <label class="btn btn-primary active">
                    <input type="radio" name="type" value="round" id="flight-option-1" checked/>Round Trip
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="type" value="one" id="flight-option-2"/>One Way
                  </label>
                </div>
              </div>
            </div>
            <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
              <h4 class="theme-search-area-inline-title">Lodon Flights</h4>
              <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Passnger</p>
              <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                <i class="fa fa-pencil"></i>Edit
              </a>
              <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                <div class="theme-search-area theme-search-area-vert">
                  <div class="theme-search-area-header">
                    <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                    <p class="theme-search-area-subtitle">Prices might be different from current results</p>
                  </div>
                  <div class="theme-search-area-form">
                    <div class="theme-search-area-section first theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">From</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input name="from" class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Departure" data-provide="typeahead"/>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">To</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input name="to" class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" data-provide="typeahead"/>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Depart</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="departure" class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Arrival</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="arrival" class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                      <label class="theme-search-area-section-label">Passengers</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-people"></i>
                        <input name="passengers" class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                        <div class="quantity-selector-box" id="mobile-FlySearchPassengers">
                          <div class="quantity-selector-inner">
                            <p class="quantity-selector-title">Passengers</p>
                            <ul class="quantity-selector-controls">
                              <li class="quantity-selector-decrement">
                                <a href="#">&#45;</a>
                              </li>
                              <li class="quantity-selector-current">1</li>
                              <li class="quantity-selector-increment">
                                <a href="#">&#43;</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Change</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="theme-page-section theme-page-section-gray">
      <div class="container">
        <div class="row row-col-static" id="sticky-parent" data-gutter="20">
          <div class="col-md-2-5 ">
            <div class="sticky-col _mob-h">
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections _mb-20 _br-2">
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">nonstop</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$305</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">1 stop</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$349</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">2 stops</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$154</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Economy</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Business</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$292</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">First</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$332</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                    <div class="theme-search-results-sidebar-section-price">
                      <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$466</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$256</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$404</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$216</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$286</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$411</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$386</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$285</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$248</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$190</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">CLY: City</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$336</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LHR: Heathrow</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LCW: Gatwich</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">STN: Stansed</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$405</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SEN: Southend</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">JFK: John F. Kennedy</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$366</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LGA: LaGuardia</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">EWR: Newark Liberty</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$424</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">KLM Royal Dutch...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$127</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LOT Polish Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$261</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Wow Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$423</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Virgin Atlantic...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Delta Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$425</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SWISS Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Lufthansa</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">American Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Fly Emirates</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$105</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-ad">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
            </div>
          </div>
          <div class="col-md-7 ">
            <div class="theme-search-results-sort _mob-h clearfix">
              <h5 class="theme-search-results-sort-title">Sort by:</h5>
              <ul class="theme-search-results-sort-list">
                <li>
                  <a href="#">Price
                    <span>Low &rarr; High</span>
                  </a>
                </li>
                <li class="active">
                  <a href="#">Duration
                    <span>Long &rarr; Short</span>
                  </a>
                </li>
                <li>
                  <a href="#">Recommended
                    <span>High &rarr; Low</span>
                  </a>
                </li>
                <li>
                  <a href="#">Airline Name
                    <span>Name &nbsp; A &rarr; Z</span>
                  </a>
                </li>
              </ul>
              <div class="dropdown theme-search-results-sort-alt">
                <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">More
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  <li>
                    <a href="#">Departure take-off</a>
                  </li>
                  <li>
                    <a href="#">Departure landing</a>
                  </li>
                  <li>
                    <a href="#">Return take-off</a>
                  </li>
                  <li>
                    <a href="#">Return landing</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="theme-search-results-sort-select _desk-h">
              <select>
                <option>Price</option>
                <option>Duration</option>
                <option>Recommended</option>
                <option>Airline Name</option>
                <option>Departure take-off</option>
                <option>Departure landing</option>
                <option>Return take-off</option>
                <option>Return landing</option>
              </select>
            </div>
            @if(!Auth::check())
            <div class="theme-search-results-sign-in _mob-h bg-grad">
              <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
              <h5 class="theme-search-results-sign-in-title">Sign in to unlock our secret delas. Save up to
                <b>50%</b>
              </h5>
              <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="#">Sign in now</a>
            </div>
            @endif
            <div class="theme-search-results">
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/351x253.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>17h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CLY</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">01:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Virgin Atlantic Airways</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">12:10
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>16h 40m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:50
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$179</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-1">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">17h 50m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">17h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CLY</b>City
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6845 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">16h 40m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">16h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LCW</b>Gatwich
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7612 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-2"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/351x253.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">11:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>17h 10m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Virgin Atlantic Airways</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/192x88.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">08:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>19h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">03:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Fly Emirates</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$443</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-2">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-2">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">17h 10m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">17h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4980 Virgin</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">19h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">19h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1887 Fly</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-3"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/192x88.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">05:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>24h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SVO</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:00
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Fly Emirates</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>37h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:50
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$472</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-3">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-3">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">24h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">7h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LTN</b>Luton
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>3937 Fly</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">5h 30m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6001 Fly</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Moscow(SVO)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:00
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">5h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4731 Fly</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">37h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:10
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LTN</b>Luton
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1331 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:60
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8443 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:60
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">10h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8412 KLM</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-4"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/647x647.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">03:50
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>20h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">KEF</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">12:40
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Wow Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:10
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>24h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">BOS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$339</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-4">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-4">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">20h 50m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>KEF</b>Keflavík Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Keflavík</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1106 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:10
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Keflavík(KEF)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:40
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">7h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>KEF</b>Keflavík Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Keflavík</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1437 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">24h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">14h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LCW</b>Gatwich
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6848 American</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">0h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9692 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-5"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>21h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">STN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">AMS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/149x119.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">01:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>27h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">AMS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Delta Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$105</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-5">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-5">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">21h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>STN</b>Stansed
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9395 KLM</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5465 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Amsterdam(AMS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>3870 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">27h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">7h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9205 Delta</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>2505 Delta</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Amsterdam(AMS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1899 Delta</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-6" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-6"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/192x88.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">11:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>16h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Fly Emirates</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">12:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>19h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">STN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:50
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$440</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-6">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-6" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-6">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">16h 50m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">16h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LCW</b>Gatwich
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4351 Fly</li>
                                      <li>Narrow-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">19h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">19h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>STN</b>Stansed
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8665 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-7" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-7"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>23h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SVO</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/647x647.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">11:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>21h 10m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">08:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Wow Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$466</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-7">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-7" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-7">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">23h 50m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6803 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Moscow(SVO)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4192 KLM</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:40
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:40
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7432 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">21h 10m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">21h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6734 Wow</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-8" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-8"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/343x257.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>22h 10m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by SWISS Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>27h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">08:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$412</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-8">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-8" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-8">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">22h 10m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">13h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>2190 SWISS</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:10
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1346 SWISS</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">27h 50m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">11h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>3664 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">14h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5697 American</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-9" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-9"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/343x257.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:50
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>18h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by SWISS Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>23h 40m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">BOS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SVO</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:00
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$129</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-9">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-9" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-9">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">18h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">18h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9607 SWISS</li>
                                      <li>Narrow-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">23h 40m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>3715 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8269 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Moscow(SVO)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:00
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7764 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-10" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-10"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/192x88.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>15h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:50
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Fly Emirates</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/647x647.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>19h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SVO</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">02:40
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Wow Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$462</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-10">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-10" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-10">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">15h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">15h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5927 Fly</li>
                                      <li>Narrow-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">19h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9287 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">0h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Moscow(SVO)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:40
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7503 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-11" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-11"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/647x647.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>24h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">STN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SVO</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:00
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Wow Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">01:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>36h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">BOS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">WAW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">01:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$328</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-11">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-11" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-11">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">24h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>STN</b>Stansed
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4648 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5904 Wow</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Moscow(SVO)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:00
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SVO</b>Sheremetyevo
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Moscow</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8268 Wow</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">36h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LTN</b>Luton
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4093 American</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9917 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Warszawa(WAW)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">10h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7972 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-12" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-12"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/439x198.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">11:50
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>19h 10m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:00
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by LOT Polish Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/192x88.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:20
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>18h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Fly Emirates</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$245</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-12">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-12" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-12">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">19h 10m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">10h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LCW</b>Gatwich
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8512 LOT</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">0h 30m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:00
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>3752 LOT</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">18h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">18h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LTN</b>Luton
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4404 Fly</li>
                                      <li>Wide-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-13" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-13"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">08:10
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>20h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:10
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>22h 30m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:50
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$383</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-13">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-13" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-13">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">20h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:10
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:10
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">20h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LCW</b>Gatwich
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6146 KLM</li>
                                      <li>Wide-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">22h 30m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:50
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">22h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>2600 American</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-14" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-14"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/200x124.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>23h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">BOS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">KEF</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">08:50
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by KLM Royal Dutch Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/351x253.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">11:10
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>31h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">JFK</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">06:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Virgin Atlantic Airways</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$196</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-14">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-14" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-14">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">23h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LTN</b>Luton
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1640 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Airbus A321-100/200</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:40
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:10
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>KEF</b>Keflavík Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Keflavík</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8575 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Keflavík(KEF)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>KEF</b>Keflavík Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Keflavík</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6420 KLM</li>
                                      <li>Narrow-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">31h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:40
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">13h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9541 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:40
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">16h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>JFK</b>John F. Kennedy
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9125 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-200</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-15" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-15"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/439x198.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>20h 20m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CLY</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">WAW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">05:40
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by LOT Polish Airlines</h5>
                        </div>
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/374x374.png')}}" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">07:10
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>21h 10m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">WAW</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">04:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Lufthansa</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$136</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-15">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-15" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-15">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">20h 20m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 30m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CLY</b>City
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4677 LOT</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Warszawa(WAW)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4676 LOT</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:50
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">0h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:40
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CDG</b>Charles de Gaulle
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5444 LOT</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">21h 10m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-search-results-item-flight-details-schedule">
                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:10
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>SEN</b>Southend
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>5025 Lufthansa</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 50m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Warszawa(WAW)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">04:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">10h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>WAW</b>Warsaw Chopin
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>6517 Lufthansa</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-search-results-mobile-filters" id="mobileFilters">
                <a class="theme-search-results-mobile-filters-btn magnific-inline" href="#MobileFilters">
                  <i class="fa fa-filter"></i>Filters
                </a>
                <div class="magnific-popup mfp-hide" id="MobileFilters">
                  <div class="theme-search-results-sidebar">
                    <div class="theme-search-results-sidebar-sections">
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">nonstop</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$369</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">1 stop</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$284</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">2 stops</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$492</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Economy</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$273</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Business</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$171</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">First</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$399</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                        <div class="theme-search-results-sidebar-section-price">
                          <input id="price-slider-mob" name="price-slider" data-min="100" data-max="500"/>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$287</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$212</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$445</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$259</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$468</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$367</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$177</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$354</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$242</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$219</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$470</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">CLY: City</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$321</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LHR: Heathrow</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$110</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LCW: Gatwich</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$196</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">STN: Stansed</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$281</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">SEN: Southend</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$329</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">JFK: John F. Kennedy</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$287</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LGA: LaGuardia</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$372</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">EWR: Newark Liberty</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$427</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">KLM Royal Dutch...</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$421</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LOT Polish Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$117</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Wow Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$230</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Virgin Atlantic...</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$244</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Delta Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$427</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">SWISS Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Lufthansa</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$204</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">American Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$150</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Fly Emirates</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn _tt-uc _fs-sm btn-dark btn-block btn-lg" href="#">Load More Results</a>
          </div>
          <div class="col-md-2-5 ">
            <div class="sticky-col _mob-h">
              <div class="theme-ad _mb-20">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x800.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
              <div class="theme-ad">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection