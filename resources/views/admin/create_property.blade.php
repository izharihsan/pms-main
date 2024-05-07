<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Wizard with validation</h6>
    </div>

    <form class="wizard-form steps-validation wizard clearfix" action="#" role="application" id="steps-uid-4" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-4-t-0" href="#steps-uid-4-h-0" aria-controls="steps-uid-4-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-4-t-1" href="#steps-uid-4-h-1" aria-controls="steps-uid-4-p-1" class="disabled"><span class="number">2</span> Your education</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-4-t-2" href="#steps-uid-4-h-2" aria-controls="steps-uid-4-p-2" class="disabled"><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-4-t-3" href="#steps-uid-4-h-3" aria-controls="steps-uid-4-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
        <h6 id="steps-uid-4-h-0" tabindex="-1" class="title current">Personal data</h6>
        <fieldset id="steps-uid-4-p-0" role="tabpanel" aria-labelledby="steps-uid-4-h-0" class="body current" aria-hidden="false">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select location:</label>
                        <select name="location" class="form-select">
                            <optgroup label="North America">
                                <option value="1">United States</option>
                                <option value="2">Canada</option>
                            </optgroup>

                            <optgroup label="Latin America">
                                <option value="3">Chile</option>
                                <option value="4">Argentina</option>
                                <option value="5">Colombia</option>
                                <option value="6">Peru</option>
                            </optgroup>

                            <optgroup label="Europe">
                                <option value="8">Croatia</option>
                                <option value="9">Hungary</option>
                                <option value="10">Ukraine</option>
                                <option value="11">Greece</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select position:</label>
                        <select name="position" class="form-select">
                            <optgroup label="Developer Relations">
                                <option value="1" selected="">Sales Engineer</option>
                                <option value="2">Ads Solutions Consultant</option>
                                <option value="3">Technical Solutions Consultant</option>
                                <option value="4">Business Intern</option>
                            </optgroup>

                            <optgroup label="Engineering &amp; Design">
                                <option value="5">Interaction Designer</option>
                                <option value="6">Technical Program Manager</option>
                                <option value="7">Software Engineer</option>
                                <option value="8">Information Security Engineer</option>
                            </optgroup>

                            <optgroup label="Marketing &amp; Communications">
                                <option value="13">Media Outreach Manager</option>
                                <option value="14">Research Manager</option>
                                <option value="15">Marketing Intern</option>
                                <option value="16">Business Intern</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Applicant name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Email address: <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Phone #:</label>
                        <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Date of birth:</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <select name="birth-month" class="form-select">
                                    <option value="1" selected="">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <select name="birth-day" class="form-select">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="...">...</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <select name="birth-year" class="form-select">
                                    <option value="1" selected="">1980</option>
                                    <option value="2">1981</option>
                                    <option value="3">1982</option>
                                    <option value="4">1983</option>
                                    <option value="5">1984</option>
                                    <option value="6">1985</option>
                                    <option value="7">1986</option>
                                    <option value="8">1987</option>
                                    <option value="9">1988</option>
                                    <option value="10">1989</option>
                                    <option value="11">1990</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6 id="steps-uid-4-h-1" tabindex="-1" class="title">Your education</h6>
        <fieldset id="steps-uid-4-p-1" role="tabpanel" aria-labelledby="steps-uid-4-h-1" class="body" aria-hidden="true" style="display: none;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">University: <span class="text-danger">*</span></label>
                        <input type="text" name="university" placeholder="University name" class="form-control required">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Country:</label>
                        <select name="university-country" class="form-select">
                            <option value="1" selected="">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Degree level: <span class="text-danger">*</span></label>
                        <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Specialization:</label>
                        <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">From:</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-from-month" class="form-select">
                                            <option value="January" selected="">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-from-year" class="form-select">
                                            <option value="1995" selected="">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label">To:</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-to-month" class="form-select">
                                            <option value="January" selected="">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-to-year" class="form-select">
                                            <option value="1995" selected="">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Language of education:</label>
                        <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                    </div>
                </div>
            </div>
        </fieldset>

        <h6 id="steps-uid-4-h-2" tabindex="-1" class="title">Your experience</h6>
        <fieldset id="steps-uid-4-p-2" role="tabpanel" aria-labelledby="steps-uid-4-h-2" class="body" aria-hidden="true" style="display: none;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Company: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-company" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-position" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">From:</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-from-month" class="form-select">
                                            <option value="January" selected="">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-from-year" class="form-select">
                                            <option value="1995" selected="">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label">To:</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-to-month" class="form-select">
                                            <option value="January" selected="">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="education-to-year" class="form-select">
                                            <option value="1995" selected="">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Brief description:</label>
                        <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recommendations:</label>
                        <input type="file" class="form-control">
                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6 id="steps-uid-4-h-3" tabindex="-1" class="title">Additional info</h6>
        <fieldset id="steps-uid-4-p-3" role="tabpanel" aria-labelledby="steps-uid-4-h-3" class="body" aria-hidden="true" style="display: none;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Applicant resume:</label>
                        <input type="file" class="form-control">
                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Where did you find us?</label>
                        <select name="source" class="form-select">
                            <option value="monster" selected="">Monster.com</option> 
                            <option value="linkedin">LinkedIn</option> 
                            <option value="google">Google</option> 
                            <option value="adwords">Google AdWords</option> 
                            <option value="other">Other source</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Availability:</label>
                        
                        <label class="form-check mb-1">
                            <input type="radio" class="form-check-input" name="availability" checked="">
                            <span class="form-check-label">Immediately</span>
                        </label>

                        <label class="form-check mb-1">
                            <input type="radio" class="form-check-input" name="availability">
                            <span class="form-check-label">1 - 2 weeks</span>
                        </label>

                        <label class="form-check mb-1">
                            <input type="radio" class="form-check-input" name="availability">
                            <span class="form-check-label">3 - 4 weeks</span>
                        </label>

                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="availability">
                            <span class="form-check-label">More than 1 month</span>
                        </label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Additional information:</label>
                        <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="ph-arrow-circle-left me-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="ph-arrow-circle-right ms-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="ph-paper-plane-tilt ms-2"></i></a></li></ul></div></form>
</div>