                </div>
            </main>
            <footer class="pagefoot mt-auto footer pt-3 text-center bg-dark">
                <div class="container-lg">
                <?php if (function_exists('customPageFooter')){
                customPageFooter();
                }?>
                    <!--h3 class="text-light font-weight-light mt-5 mb-3">To receive info and updates:</h3>
                    <a href="mailto:weareNTM@gmail.com?subject=Join%20the%20No%20Rezone%20NTM%20Mailing%20List&body=Send%20this%20email%20with%20the%20address%20you%20would%20like%20added%20to%20the%20mailing%20list." class="btn btn-lg btn-outline-primary px-5 mb-5">Join the No Rezone NTM Mailing List</a-->
                <form method="POST" action="mailing-list.php?action=subscribe" class="py-3">
                    <h3 class="text-light font-weight-lighter">To receive info and updates, subscribe to the No Rezone NTM mailing list:</h3>
                    <div class="input-group my-3">
                        <input name="email-address" type="text" class="form-control" placeholder="Email address..." aria-label="Email address">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"><span class="mx-2 mx-sm-3 mx-md-4 mx-lg-5">Subscribe</span></button>
                        </div>
                    </div>
                </form>
                <p class="py-3">Web application designed and programmed by Nathan Getz.</p>
                </div>
            </footer>
        <!--div class="vignette"></div-->
        <?php if (function_exists('customPageFooterScripts')){customPageFooterScripts();}?>
    </body>
</html>