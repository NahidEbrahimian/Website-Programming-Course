

<footer  class="text-center mt-4 text-dark"  style="position: absolute; bottom: 80px; margin-top: 10px; width: 100%;">
<hr>
<p>
    <?php echo date("Y"); ?>&copy;
    Copyright
</p>
</footer>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="dist/mds.bs.datetimepicker.js"></script>


<script>
    const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
        targetTextSelector: '[data-name="dtp1-text"]',
        targetDateSelector: '[data-name="dtp1-date"]',
    });
</script>
</body>

</html>