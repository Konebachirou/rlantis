<div class="nicdark_section nicdark_height_50"></div>
@if ($paginator->hasPages())
<div class="nicdark_section nicdark_text_align_center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span aria-disabled="true" style="height: 15px; width: 80px;" class=" nicdark_display_inline_block nicdark_color_greydark nicdark_border_2_solid_grey nicdark_first_font nicdark_margin_right_20 nicdark_margin_left_20 nicdark_bg_white nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13 nicdark_height_15 " >précedent</span>
    @else
    <a class=" nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font  nicdark_margin_right_20 nicdark_margin_left_20 nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"  href="{{ $paginator->previousPageUrl() }}" style="background-color: orange; height: 15px;width: 80px;" rel="prev">Précedent</a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a class=" nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font  nicdark_padding_8 nicdark_margin_right_20  nicdark_margin_left_20 nicdark_border_radius_3 nicdark_font_size_13"  href="{{ $paginator->nextPageUrl() }}" style="background-color: orange; height: 15px; width: 80px;" rel="next">Suivant</a>
    @else
    <span aria-disabled="true" style="height: 15px; width: 80px;" class=" nicdark_margin_right_20  nicdark_margin_left_20 nicdark_display_inline_block nicdark_color_greydark nicdark_border_2_solid_grey nicdark_first_font nicdark_bg_white nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" >Suivant</span>
    @endif
</div>
@endif
