<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content here -->
</head>
<body>

<div id="KJE-E-INPUTS" class="KJEDroppee" style="display: block; width: 100%; transition: height 0.5s ease 0s; height: auto; background-color: rgb(230, 240, 247);">
    <!-- Starting Balance -->
    <div id="KJE-C-STARTING_BALANCE" class="KJEInputContainer" aria-live="assertive" aria-atomic="true">
        <div class="KJEHelp " style="position: absolute; display: inline-block; width: 210px; left: 0px;">
            <label for="KJE-STARTING_BALANCE" class="KJEHelp " id="KJE-LB-STARTING_BALANCE" style="margin-top: 7.5px;">
                <span id="KJE-RT-STARTING_BALANCE" class="KJEHelp ">Starting balance</span>
                <span id="KJE-RC-STARTING_BALANCE" class="KJEHelp ">:</span>
                <span id="KJE-RR-STARTING_BALANCE" class="KJERequired">*<span class="KJERequiredShowHover">This entry is required.</span></span>
                <span id="KJE-RG-STARTING_BALANCE" class="KJEAccessibleInLine">Enter an amount between $0.00 and $2,000,000.00</span>
            </label>
            <button id="KJE-PO-STARTING_BALANCE" aria-label="Define: Starting balance" class="KJEDefinitionIcon" tabindex="0" type="button" aria-controls="KJE-PODEFN-STARTING_BALANCE" aria-expanded="false" style="float: right;">?</button>
        </div>
        <div class="KJEGuiDefnPopup" id="KJE-PODEFN-STARTING_BALANCE" aria-label="Define: Starting balance" aria-hidden="true" style="display: none;">
            <div class="KJEDefinitionPopup">
                <h3 class="KJEDefinition">Starting balance</h3>
                <p class="KJEDefinition">The current balance of your traditional IRA.</p>
            </div>
        </div>
        <input id="KJE-STARTING_BALANCE" name="STARTING_BALANCE" class="KJEInput KJEInputModern" aria-describedby="KJE-PODEFN-STARTING_BALANCE" aria-invalid="false" style="height: 20px; top: 2px; position: absolute; display: inline-block; width: 110px; left: 215px;">
        <div aria-hidden="true" class="KJESlider" style="position: absolute; display: inline-block; left: 342px; height: 28px; width: 427px;">
            <!-- Your slider content here -->
        </div>
    </div>

    <!-- Annual Contribution -->
    <div id="KJE-C-ANNUAL_CONTRIBUTION" class="KJEInputContainer" aria-live="assertive" aria-atomic="true">
        <!-- Your Annual Contribution HTML content here -->
    </div>

    <!-- Current Age -->
    <div id="KJE-C-CURRENT_AGE" class="KJEInputContainer" aria-live="assertive" aria-atomic="true">
        <!-- Your Current Age HTML content here -->
    </div>

    <!-- Age at Retirement -->
    <div id="KJE-C-AGE_OF_RETIREMENT" class="KJEInputContainer" aria-live="assertive" aria-atomic="true">
        <!-- Your Age at Retirement HTML content here -->
    </div>
</div>

</body>
</html>
