<?php include('header.php'); ?>
<?php include('aside.php'); ?>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div id="tracking">
            <h1>Tracking</h1>
            <h2>
                I am looking for data from " <span id="categoryChoice"></span> " category
            </h2>

            <div class="categoryGraphContainer clearfix">
                <div class="deltaGraphContainer">
                    <div class="inputGroup">
                        <label>From : </label>
                        <input type="date" id="from"/>
                    </div>
                    <div class="inputGroup">
                        <label>To : </label>
                        <input type="date" id="from"/>
                    </div>
                </div>
                <div class="categoryGraph ct-chart">
                </div>
            </div>


            <ul id="snippetGraphList" class="clearfix">
                <li>
                    <div class="snippetDetails">
                        <div class="text">
                            <h2>Snippets 1</h2>
                            <p>Create at 12/02/2015</p>
                        </div>
                    </div>

                    <div class="graphContainer">
                        <div class="clickRateGraphContainer">
                            <div class="clickRateGraph clickRateGraph-1 ct-chart .ct-square"></div>
                            <span>Click rate</span>
                        </div>

                        <div class="snippetGraphContainer">
                            <div class="snippetGraph snippetGraph-1 ct-chart"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="snippetDetails">
                        <div class="text">
                            <h2>Snippets 1</h2>
                            <p>Create at 12/02/2015</p>
                        </div>
                    </div>

                    <div class="graphContainer">
                        <div class="clickRateGraphContainer">
                            <div class="clickRateGraph clickRateGraph-2 ct-chart .ct-square"></div>
                            <span>Click rate</span>
                        </div>

                        <div class="snippetGraphContainer">
                            <div class="snippetGraph snippetGraph-2 ct-chart"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<?php include('footer.php'); ?>