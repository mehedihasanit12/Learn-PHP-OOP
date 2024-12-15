<?php include "includes/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Calculator Program
                        </div>
                        <div class="card-body">
                            <form action="web.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3 fw-bold">First Number</label>

                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3 fw-bold">Last Number</label>

                                    <div class="col-md-9">
                                        <input type="number" name="last_number" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3 fw-bold">Your choice:</label>

                                    <div class="col-md-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="your_choice" id="inlineRadio1" value="+">
                                            <label class="form-check-label" for="inlineRadio1">+</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="your_choice" id="inlineRadio2" value="-">
                                            <label class="form-check-label" for="inlineRadio2">-</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="your_choice" id="inlineRadio3" value="/">
                                            <label class="form-check-label" for="inlineRadio3">/</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="your_choice" id="inlineRadio3" value="*">
                                            <label class="form-check-label" for="inlineRadio3">*</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3 fw-bold">Result</label>

                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($_GET['result']) ? $_GET['result'] : '' ?>"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3 fw-bold"></label>

                                    <div class="col-md-9">
                                        <input type="submit" name="calculator_result_btn" class="btn btn-success" value="See Result"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>