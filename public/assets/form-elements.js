(function (e) {
    var t = e.fn.select2.amd.require("select2/defaults");
    e.extend(t.defaults, { searchInputPlaceholder: "" });
    var r = e.fn.select2.amd.require("select2/dropdown/search"),
        o = r.prototype.render;
    r.prototype.render = function (s) {
        var a = o.apply(this, Array.prototype.slice.apply(arguments));
        return (
            this.$search.attr(
                "placeholder",
                this.options.get("searchInputPlaceholder")
            ),
            a
        );
    };
})(window.jQuery);
$(function () {
    $(".main-toggle").on("click", function () {
        $(this).toggleClass("on");
    }),
        $("#dateMask").mask("99/99/9999"),
        $("#phoneMask").mask("(999) 999-9999"),
        $("#phoneExtMask").mask("(999) 999-9999? ext 99999"),
        $("#ssnMask").mask("999-99-9999"),
        $("#colorpicker").spectrum({ color: "#17A2B8" }),
        $("#showAlpha").spectrum({
            color: "rgba(23,162,184,0.5)",
            showAlpha: !0,
        }),
        $("#showPaletteOnly").spectrum({
            showPaletteOnly: !0,
            showPalette: !0,
            color: "#DC3545",
            palette: [
                ["#1D2939", "#fff", "#0866C6", "#23BF08", "#F49917"],
                ["#DC3545", "#17A2B8", "#6610F2", "#fa1e81", "#72e7a6"],
            ],
        }),
        $(".fc-datepicker").datepicker({
            showOtherMonths: !0,
            selectOtherMonths: !0,
        }),
        $("#datepickerNoOfMonths").datepicker({
            showOtherMonths: !0,
            selectOtherMonths: !0,
            numberOfMonths: 2,
        }),
        $("#datetimepicker").datetimepicker({
            format: "yyyy-mm-dd hh:ii",
            autoclose: !0,
        }),
        $("#datetimepicker2").appendDtpicker({
            closeOnSelected: !0,
            onInit: function (e) {
                var t = e.getPicker();
                $(t).addClass("main-datetimepicker");
            },
        }),
        $(document).ready(function () {
            $(".select2").select2({
                placeholder: "Choose one",
                searchInputPlaceholder: "Search",
            }),
                $(".select2-no-search").select2({
                    minimumResultsForSearch: 1 / 0,
                    placeholder: "Choose one",
                });
        });
});