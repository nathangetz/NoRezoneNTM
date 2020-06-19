<?php
session_start();
$PageTitle = "Home";
function customPageHeader(){
?>



<?php 
} include_once('header.php'); ?>

<?php
if (isset($_SESSION['message']) && $_SESSION['message'])
{
    printf('<b>%s</b>', $_SESSION['message']);
    unset($_SESSION['message']);
}
?>


<div class="card text-center bg-dark text-white my-5 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default" id="hero">
    <img src="images/IMG_1449.jpeg" class="card-img" alt="image" style="width: 100%; height: 30rem; object-fit: cover;">
    <div class="card-img-overlay px-lg-5 pb-lg-5 d-flex flex-column justify-content-end" style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.65) 50%, rgba(0,0,0,0.75))">
        <h4 class="card-title font-weight-light">Avilla North Table Mountain</h4>
        <p class="card-text font-weight-light text-justify">NexMetro Communities has proposed the re-zoning of 26 acres of land at the base of the Northern side of North Table Mountain to build a 235 unit multi-family high-density rental development, called Avilla North Table Mountain. Jefferson County sent out info to only a few households ‘directly impacted’ by this project. The impact with be much farther reaching.</p>
        <a class="btn btn-outline-theme" href="#meeting">Learn more</a>
    </div>
</div>
<section id="meeting">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">Online Community Meeting</h2>
    <p class="lead">Jefferson County will be holding an online community meeting regarding the proposal (Case Number: 20-111516CMT). Please go to the <a href="https://www.jeffco.us/2680/Community-Meetings" target="_blank">county website</a> for information on how to join. The meeting information is as follows.</p>
    <div class="card shadow my-4 mb-5">
        <h5 class="card-header">Community Meeting Information <a class="text-decoration-none small" href="https://www.jeffco.us/2680/Community-Meetings" target="_blank">via Jeffco</a></h5>
        <div class="card-body">
            <h4 class="card-title">20-111516CMT: Avilla North Table Mountain</h4>
            <p class="card-text">Virtual Community Meeting to discuss the potential Rezoning from Planned Development (PD) and Agricultural-Two (A-2) to Planned Development (PD) to allow for the development of 4 parcels (26 acres total) as a multi-family residential development of 235 units, styled as single-family detached and attached units, and communal amenities.</p>
            <p><strong>Meeting:&nbsp;</strong>Thursday, June 25, 2020 at 6:00 p.m. via Zoom.</p>
            <p><a href="https://zoom.us/j/96607638957" rel="noopener" target="_blank" aria-label="Join the meeting here. Opens in new window">Join the meeting here.</a><a href="https://us02web.zoom.us/j/87169965758?pwd=djNabGZmUjdwNzRxQkF2a0FZbVFOZz09" rel="noopener" target="_blank" aria-label=" Opens in new window"><sup><img data-fr-image-pasted="true" src="https://www.jeffco.us/ImageRepository/Document?documentId=20422" alt="external_site_marker Opens in new window" class="fr-fic fr-dii" style="width: 16px;"></sup></a></p>
            <p><strong>Meeting ID:</strong> 966 0763 8957</p>
            <p><strong>Dial-in Option:</strong>+1 669-900-6833</p>
            <p><em>&lt;Applicant presentation will be posted soon&gt;</em></p>
            <p>The applicant will present their case, followed by a brief staff presentation about the County processes involved. These presentations will be followed by a question and answer session.</p>
            <p><strong>Applicant:&nbsp;</strong>Kayleigh Robinson (Norris Design) and Tyler Elick (NEXmetro Communities)<br><strong>Case Manager:&nbsp;</strong>Alicia Halberg, <a href="mailto:ahalberg@co.jefferson.co.us">email Alicia here</a> or call at 303-271-8778</p>
        </div>
    </div>
    <div class="card text-center bg-dark text-white my-5 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default" id="hero">
        <img src="images/IMG_20200607_233320(1).jpeg" class="card-img-top" alt="Community meeting info post card" style="width: 100%; object-fit: contain;">
        <div class="card-body">
            <p class="card-text lead">This is the post card that Jefferson County sent out to only a few households ‘directly impacted’ by this project. The impact with be much farther reaching.</p>
        </div>
    </div>
</section>
<section id="site-plan">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">Site Plan</h2>
    <div class="card text-center bg-dark text-white my-5 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default">
        <embed class="card-image-top bg-white" src="images/Site Plan - 02.pdf" style="width: 100%; height: 0%; padding-top: 47.5%; object-fit: contain;"/>
        <div class="card-body">
            <p class="card-text lead">This is the site plan for the development.</p>
        </div>
    </div>
    <div class="card text-center bg-dark text-white my-5 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default">
        <img src="images/development.png" class="card-img-top" alt="satellite image marked up showing development plan" style="width: 100%; object-fit: contain;">
        <div class="card-body">
            <p class="card-text lead">This is a satellite image, with an overlay outlining the area that the development will take up.</p>
        </div>
    </div>
</section>
<section id="considerations">
    <hr class="my-lg-3 my-5">
    <div class="card shadow my-4 mb-5">
        <h2 class="card-header font-weight-light">Considerations</h2>
        <div class="card-body">
            <p class="card-text">
                <ul>
                    <li><p>Potential future development of additional high-density housing on open lands once the precedent is set.</p></li>
                    <li><p>Traffic impacts:  Highway 93, Easley Road, W 58th Ave, W 60th Ave, McIntyre Street.</p></li>
                    <li><p>Water and sanitation infrastructure (i.e. flow rates, price).</p></li>
                    <li><p>Full-cycle environmental impacts of not only the proposed construction project itself, but also as a result of the consistent / never-ending impacts (noise, pollution, maintenance, etc.) of large, multi-unit rental properties, where tenant turnover is high and unpredictable.</p></li>
                    <li><p>Impacts on local trails of significantly increased population.</p></li>
                    <li><p>Impacts on already overcrowded schools.</p></li>
                    <li>
                        <p>
                            Properties that are Zoned R-3 have significant and impactful allowances, some of which include:
                            <ul>
                                <li>The number of dwellings allowed within a plan of development can be increased exponentially. In this application, the change would increase the currently approved, One single family dwelling per 1/4 acre lot to 8 dwellings per 1/4 acre lot.</li>
                                <li>Group home living facilities, where multiple registered sex offenders are allowed to live in one residence.</li>
                                <li>Building height allowances of up to 45 feet tall.</li>
                            </ul>
                        </p>
                    </li>
                    <br>
                    <li><p class="lead">Please email Alicia Halberg with concerns/6questions as they are required to be written up and added to the case file as well as passing the comments on to her supervisor and director.</p></li>
                </ul>
            </p>
        </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">These are the steps of the rezoning process:</li>
    </ul>
    <img src="/images/rezoning-process.jpg" class="card-img-top" alt="a diagram of the steps that are taken to rezone an area">
    </div>
</section>
<section id="talking-points">
    <hr class="my-lg-3 my-5">
    <div class="card shadow my-4 mb-5">
        <h2 class="card-header font-weight-light">Talking Points</h2>
        <div class="card-body">
            <p class="card-text">
                <h3>On Current Petition</h3>
                <ul>
                    <li><p>Non-compatibility with existing land use and surrounding homes.</p></li>
                    <li><p>Failure of the proposed rezoning to follow the current, Jefferson County approved Master Plan for the subject tracts of land.</p></li>
                    <li><p>Inability of existing road infrastructure to accommodate the exponential increase in traffic and resulting congestion, which will create significant and unavoidable safety hazards in local neighborhoods as drivers divert off of main road ways to avoid congestion.</p></li>
                    <li><p>Severe environmental impacts from construction, ongoing property maintenance, increased traffic on local trails / impacts on native wildlife and pollution increases.</p></li>
                </ul>
                <h3>Traffic/Congestion</h3>
                <ul>
                    <li><p>The rezoned development will add at least eight times the volume of traffic over the current zoning allowance.  The increased traffic volumes will cause an increase in accidents and pedestrian conflicts at many intersections including 60th Avenue and Easley Road and 58th Avenue and State Highway 93.</p></li>
                </ul>
                <div class="card text-center bg-dark text-white mb-4 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default">
                    <img src="images/NTM Traffic.png" class="card-img-top" alt="satellite image marked up showing development plan" style="width: 100%; object-fit: contain;">
                    <div class="card-body">
                        <p class="card-text lead">This is a satellite image, showing the areas in which traffic will be impacted by the development.</p>
                    </div>
                </div>
                <h3>Geologic Hazards</h3>
                <ul>
                    <li><p>The parcel is mapped by the US Geological Survey and Colorado Geologic Survey as being part of a dormant landslide (Geologic Maps: <a href="https://ngmdb.usgs.gov/Prodesc/proddesc_9511.htm">via ngmdb.usgs.gov</a>, <a href="https://coloradogeologicalsurvey.org/publications/landslide-susceptibility-jefferson-colorado/">via coloradogeologicalsurvey.org</a>). The increased development footprint from the rezoning will require a greater volume of earthwork when compared to current master plan. These new excavations and retaining walls could lower the stability of the slopes and cause damage to adjacent properties through new landsliding.</p></li>
                </ul>
            </p>
        </div>
    </div>
</section>
<section id="files">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">Files</h2>

    <div class="row row-cols-1 mx-5 mx-md-3 mx-lg-1 my-4 row-cols-md-3 row-cols-lg-4 text-center">
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Public Documents</h5>
                    <p class="card-text">All documents regarding the case.</p>
                    <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/" class="btn btn-outline-primary stretched-link w-75" target="_blank">View</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Cover Letter</h5>
                    <p class="card-text">The cover letter for the proposal.</p>
                    <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Cover%20Letter.pdf" class="btn btn-outline-primary stretched-link w-75" target="_blank">View</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Site Plan</h5>
                    <p class="card-text small text-muted">(2 pages)</p>
                    <div class="btn-group w-75" role="group">
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Site%20Plan%20-%2001.pdf" class="btn btn-outline-primary" target="_blank">1</a>
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Site%20Plan%20-%2002.pdf" class="btn btn-outline-primary" target="_blank">2</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Owner Acknowledgment</h5>
                    <p class="card-text small text-muted">(2 pages)</p>
                    <div class="btn-group w-75" role="group">
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Owner%20Acknowledgment.pdf" class="btn btn-outline-primary" target="_blank">1</a>
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Owner%20Acknowledgment%202.pdf" class="btn btn-outline-primary" target="_blank">2</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Deed</h5>
                    <p class="card-text small text-muted">(3 pages)</p>
                    <div class="btn-group w-75" role="group">
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Deed.pdf" class="btn btn-outline-primary" target="_blank">1</a>
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Deed%202.pdf" class="btn btn-outline-primary" target="_blank">2</a>
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Deed%203.pdf" class="btn btn-outline-primary" target="_blank">3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Predevelopment Analysis</h5>
                    <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Predevelopment%20Analysis.pdf" class="btn btn-outline-primary stretched-link w-75" target="_blank">View</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">R-3 Zoning Details</h5>
                    <p class="card-text">Information on what the zone change request being filed entails.</p>
                    <a href="https://www.jeffco.us/DocumentCenter/View/1828/Zoning-Resolution-Adopted-June-1-2019-PDF?bidId=" class="btn btn-outline-primary stretched-link w-75" target="_blank">View</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="commissioners">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">County Commissioners voting on the zone request</h2>
    <div class="row row-cols-1 mx-5 mx-md-3 mx-lg-1 my-4 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Libby Szabo</h4>
                    <p class="card-text"><a href="mailto:libby@libbyszabo.com">libby@libbyszabo.com</a></p>
                    <p class="card-text">303-271-6511</p>
                    <p class="card-text"><small class="text-muted">UP FOR RE-ELECTION 2020</small></p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Casey Tighe</h4>
                    <p class="card-text"><a href="mailto:ctighe@jeffco.us">ctighe@jeffco.us</a></p>
                    <p class="card-text"><small class="text-muted">UP FOR RE-ELECTION 2020</small></p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lesley Dahlkemper</h4>
                    <p class="card-text"><a href="mailto:ldahlkem@jeffco.us">ldahlkem@jeffco.us</a></p>
                    <p class="card-text"><small class="text-muted">Re-election in 2022</small></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card shadow mt-5">
    <div class="card-body">
        <h3 class="card-title font-weight-light">Getting involved</h3>
        <h5 class="card-text font-weight-light">To get involved and receive updates, please email: <a href="mailto:weareNTM@gmail.com">weareNTM@gmail.com</a></h5>
    </div>
</div>
<div class="card shadow mt-5">
    <div class="card-body">
        <h3 class="card-title font-weight-light">Mission Statement</h3>
        <h5 class="card-text font-weight-light">We Are NTM is a grassroots community project that aims to protect the neighborhoods, environment, infrastructure and recreational value of North Table Mountain against a developer requested rezoning that would create precedent for the erection of large scale multifamily apartment complexes on many flanks of the popular Jefferson County park.</h5>
    </div>
</div>

<?php include_once('footer.php'); ?>