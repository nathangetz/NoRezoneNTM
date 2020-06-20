            </div>
        </main>
        <footer class="pagefoot mt-auto footer pt-3 text-center bg-dark">
            <div class="container-lg">
            <?php if (function_exists('customPageFooter')){
            customPageFooter();
            }?>
            <form method="POST" action="mail.php" id="mail-sign-up" class="py-3">
                <h3 class="text-light font-weight-lighter">To receive info and updates, subscribe to the No Rezone NTM mailing list:</h3>
                <div class="input-group my-3">
                    <input class="form-control" name="email-address" type="email" required placeholder="Email address..." aria-label="Email address" pattern="\A[a-z0-9!#$%&'*+/=?^_‘{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_‘{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\z" title="Enter a valid email address.">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><span class="mx-2 mx-sm-3 mx-md-4 mx-lg-5">Subscribe</span></button>
                    </div>
                    <div class="invalid-feedback">Please enter a valid email address!</div>
                </div>
            </form>
            <p class="py-3">Web application designed and programmed by Nathan Getz.</p>
            </div>
        </footer>
        <?php if (function_exists('customPageFooterScripts')){customPageFooterScripts();}?>
    </body>
</html>