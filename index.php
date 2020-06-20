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
            <p><strong>Applicant:&nbsp;</strong>Kayleigh Robinson (Norris Design) and Tyler Elick (NEXmetro Communities)<br><strong>Case Manager:&nbsp;</strong>Alicia Halberg, <a href="mailto:ahalberg@co.jefferson.co.us">email Alicia here</a> or call at 303-271-8778</p>
        </div>
    </div>
    <div class="card text-center my-5 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default" id="hero">
        <img src="images/postcard.jpg" class="card-img-top" alt="Community meeting info post card" style="width: 100%;">
        <div class="card-body bg-dark text-white">
            <p class="card-text lead">This is the post card that Jefferson County sent out to only a few households ‘directly impacted’ by this project (according to <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/2.%20Community%20Notification/Subject%20properties%20-%20500'%20buffer.PNG" target="_blank">this map</a>). The impact with be much farther reaching.</p>
        </div>
    </div>
</section>
<section id="site-plans">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">Site Plans <a class="text-decoration-none small" href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/" target="_blank">via Jeffco</a></h2>
    <div class="card text-center my-5 px-3 mx-auto shadow border-0 rounded-lg overflow-hidden user-select-none cursor-default">
        <img src="images/site-plan-1.svg" class="card-img mb-3 rounded-lg" alt="concept site plan" style="width: 100%; object-fit: contain;">
        <img src="images/site-plan-2.svg" class="card-img mb-3 rounded-lg" alt="satellite site plan" style="width: 100%; object-fit: contain;">
        <img src="images/site-plan-3.svg" class="card-img mb-3 rounded-lg" alt="satellite site plan" style="width: 100%; object-fit: contain;">
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
                    <li><p class="lead">Please email Alicia Halberg with concerns/questions as they are required to be written up and added to the case file as well as passing the comments on to her supervisor and director.</p></li>
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
            <div class="card-text">
                <p class="lead">We are a grassroots community organization opposed to the applicants’ request to rezone the property southeast of W 58th and Blanca St. We feel the request to rezone 26 acres within the heart of our community to R3 is inappropriate for this community for a multitude of reasons. The list below contains some of the concerns citizens in our region have expressed and would like to share with others as discussion points.</p>
                
                <p>The items below are by no means a complete list, but can be useful as community members draft their own emails to county officials: <a href="mailto:ahalberg@co.jefferson.co.us">Alicia Haberg</a> and the commissioners (<a href="mailto:libby@libbyszabo.com">Libby Szabo</a>, <a href="mailto:ctighe@jeffco.us">Casey Tighe</a>, <a href="mailto:ldahlkem@jeffco.us">Lesley Dahlkemper</a>). The questions and concerns sent to the commissioners and Ms Halberg must be typed and put into the county case record for the developer to address and for the county to realize our position.</p>
                <p>As you draft a correspondence to Alicia and the county commissioners (email links above) please keep in mind the rezoning application will be evaluated by the Planning Commission and the Commissioners against the following:</p>
                <ol>
                    <li><p>Compatibility of the permitted uses with the existing and allowable land uses in the surrounding area.</p></li>
                    <li><p>The degree of conformance of the proposed change to applicable land use plans.</p></li>
                    <li><p>The effect upon the health, safety and welfare of the residents and the landowners in the surrounding area.</p></li>
                    <li><p>Impacts of the proposed use upon property in the surrounding area and ability to mitigate the negative impacts.</p></li>
                </ol>
                <h3 class="mb-2 mt-5">On the Matter of the June 25th, 2020 Online Community Meeting</h3>
                <h4 class="font-weight-light mb-3">(please note there is a dial in number: 669-900-6833 though in person representation can not be duplicated)</h4>
                <ul>
                    <li><p>Many people have expressed concerns that an online meeting is inappropriate and does not allow them the opportunity to express their concerns and have their questions adequately heard.</p></li>
                    <li><p>There are, in fact, members of our community who do not have access to the technology required to attend an online meeting and therefore, will not have a presence in the Online Community Meeting on June 25th.</p></li>
                    <li><p>This project, as many have said, is not a critical infrastructure project and as the county begins re-opening to pre-Covid-19 operation standards, the county should postpone this meeting in fairness to the county residents and not restrict their ability to participate in the planning and zoning process.</p></li>
                    <li><p>If resolved in favor of the developer, a virtual meeting on a non-urgent topic will be rightly viewed as a miscarraige of community input.</p></li>
                </ul>
                <h3 class="mb-3 mt-5">As Explained On Latest Petition</h3>
                <ul>
                    <li><p>Non-compatibility with existing land use and surrounding homes.</p></li>
                    <li><p>Failure of the proposed rezoning to follow the current, Jefferson County approved Master Plan for the subject tracts of land.</p></li>
                    <li><p>Inability of existing road infrastructure to accommodate the exponential increase in traffic and resulting congestion, which will create significant and unavoidable safety hazards in local neighborhoods as drivers divert off of main road ways to avoid congestion.</p></li>
                    <li><p>Severe environmental impacts from construction, ongoing property maintenance, increased traffic on local trails / impacts on native wildlife and pollution increases.</p></li>
                </ul>
                
                <h3 class="mb-3 mt-5">Traffic/Congestion</h3>
                <ul>
                    <li><p>The rezoned development will add at least eight times the volume of traffic over the current zoning allowance. The increased traffic volumes will cause an increase in accidents and pedestrian conflicts at many intersections including 60th Avenue and Easley Road and 58th Avenue and State Highway 93.</p></li>
                    <li><p>Available traffic volumes along 58th and 60th avenue range from about 4,000 to 5,500 vehicles per day. Under current zoning allowances these volumes would increase an estimated 5% if the properties were built out as allowed now. Should rezoning occur, the volumes could increase at least 20-25% if not more.</p></li>
                    <p class="text-muted">Developer neglects to note the senior living facility north of the proposed site is located on a four lane parkway and in a recently developed area, which does not make this senior living facility susceptible to wildfires and does not cause a great level of impact on traffic or North Table Mountain itself.</p>
                </ul>
                
                <h3 class="mb-3 mt-5">Fire/Police/Safety</h3>
                <ul>
                    <li><p>58th and 60th avenues between Easely Road and McIntyre Streets are already problem sections for local police as transient traffic flows headed to I-70 are forced through residential speed zones of 25 and 30mph.</p></li>
                    <li><p>A wildfire on NTM in 2005 burned 200 acres and came very close to destroying the homes in this exact region after the negligent use of fireworks. Concrete trucks were key to extinguishing the fire and complimenting the limited fire protection resources in the community.</p></li>
                </ul>
                
                <h3 class="mb-3 mt-5">Rezoning Precedent</h3>
                <p>North Table Mountain is a cornerstone of this community and its beauty and trails are enjoyed by the surrounding community as well as those throughout the metro area and beyond. Whereas we know development is inevitable, we are dismayed at the nature of this current proposal. Development has occurred around the mountain throughout the years, but always has fit in with the nature of the surroundings and within the guidelines of the master plan to preserve the lifestyle we have all enjoyed and moved here for. We also know that other development opportunities in the county have been denied due to not fitting into the scope of the master plan such as the following reasons:</p>
                <ul>
                    <li><p>The proposal is not in general conformance with the <em>Comprehensive Master Plan</em> because it does not meet the Land Use section of the Plan policies regarding the recommended density.</p></li>
                    <li><p>The proposal is not in conformance with the <em>Comprehensive Master Plan</em> because the goals of the master plan to maintain the mountain rural character of the land, encourage well-planned and well-executed development and encourage lower density residential development.</p></li>
                    <li><p>The proposed land use is not compatible with existing and allowable land uses in the surrounding area because of the increased traffic and other impacts associated with the concentrated multi-family development and the high density of the proposed residential uses.</p></li>
                    <li><p>The proposal is not compatible with the existing and allowable land uses in the surrounding area because the lot sizes are smaller than the properties to the north, east and west and the additional homes will increase traffic in the area causing safety concerns for the public and the nearby school.</p></li>
                </ul>
                
                <h3 class="mb-3 mt-5">Archeological</h3>
                <p>A full archeological survey should be required as this area has documented archeological remains of native american tribes on the mesas.<br>
                <a href="https://www.coloradoan.com/story/news/2013/12/25/the-unique-table-mountains-a-refreshing-holiday-getaway/4203421/" target="_blank">https://www.coloradoan.com/story/n...</a></p>
                
                <h3 class="mb-3 mt-5">Health/Safety</h3>
                <p>Groundwater contamination, groundwater is extremely shallow on the mesa and surrounding areas as evidenced by the many natural ponds and free flowing water on the mesa and the down-dip areas.  The massive excavation may reroute or pollute the natural flow of the groundwater and  perimeter canals as well as natural springs may be affected. Rerouted groundwater may impact the structural integrity of adjacent homes and infrastructure.</p>
                
                <h3 class="mb-3 mt-5">Concerns About The Developer</h3>
                <p>
                    NexMetro’s investment approach is to: “effectively manage with a philosophy to sell when the time is right; or hold the asset while continuing to collect revenue.” This means NexMetro will dispose of the North Table Mountain asset as soon as the sale price is right, often within a few years of project completion just as they have done several times before. This short-term objective is in conflict with any long term assurances they may offer to the community.
                </p>
                <span class="text-muted">
                    [See: <a href="https://azbigmedia.com/real-estate/big-deals/nexmetro-sells-gilbert-asset-for-42-6m/" target="_blank">Article A</a>, 
                    <a href="https://azbigmedia.com/real-estate/big-deals/nexmetro-sells-avilla-victoria-for-55-5m/" target="_blank">Article B</a>, 
                    <a href="https://azbigmedia.com/real-estate/multifamily/nexmetro-sells-3-communities-for-98-million/" target="_blank">Article C</a>]
                </span>
                
                <h3 class="mb-3 mt-5">Geologic Hazards</h3>
                <p>The parcel is mapped by the US Geological Survey and Colorado Geologic Survey as being part of a dormant landslide (Geologic Maps: <a href="https://ngmdb.usgs.gov/Prodesc/proddesc_9511.htm">via ngmdb.usgs.gov</a>, <a href="https://coloradogeologicalsurvey.org/publications/landslide-susceptibility-jefferson-colorado/">via coloradogeologicalsurvey.org</a>). The increased development footprint from the rezoning will require a greater volume of earthwork when compared to current master plan. These new excavations and retaining walls could lower the stability of the slopes and cause damage to adjacent properties through new landsliding.</p>
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
<section id="files">
    <hr class="my-lg-3 my-5">
    <h2 class="font-weight-light">Files</h2>

    <div class="row row-cols-1 mx-5 mx-md-3 mx-lg-1 my-4 row-cols-md-3 row-cols-lg-4 text-center">
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Public Documents</h5>
                    <p class="card-text">All documents regarding the case.</p>
                    <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/" class="btn btn-outline-primary stretched-link w-75" target="_blank">Browse</a>
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
                    <p class="card-text">The latest version of the site plan.</p>
                    <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Site%20Plan%20-%2002.pdf" class="btn btn-outline-primary stretched-link w-75" target="_blank">View</a>
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
                        <a href="https://permitsearch.jeffco.us/amandaItoI/PublicDocs/Community%20Meeting/20-111516CMT%20Avilla%20North%20Table%20Mountain/1.%20Application%20Documents/Owner%20Acknowledgement%202.pdf" class="btn btn-outline-primary" target="_blank">2</a>
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
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Petition Template</h5>
                    <p class="card-text">Please print out this document and gather as many signatures as possible.</p>
                    <a href="petition-template.pdf" class="btn btn-outline-primary stretched-link w-75" download="Petition Template - Avilla North Table Mountain - FINAL 6-18-20.pdf">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card shadow mt-5">
    <div class="card-body">
        <h3 class="card-title font-weight-light">Getting involved</h3>
        <h5 class="card-text font-weight-light">To get involved and receive updates, please email: <a href="mailto:kristen@norezonentm.com">kristen@norezonentm.com</a></h5>
    </div>
</div>
<div class="card shadow mt-5">
    <div class="card-body">
        <h3 class="card-title font-weight-light">Mission Statement</h3>
        <h5 class="card-text font-weight-light">We Are NTM is a grassroots community project that aims to protect the neighborhoods, environment, infrastructure and recreational value of North Table Mountain against a developer requested rezoning that would create precedent for the erection of large scale multifamily apartment complexes on many flanks of the popular Jefferson County park.</h5>
    </div>
</div>

<?php include_once('footer.php'); ?>