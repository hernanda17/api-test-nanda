<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Click Report</title>
</head>

<body>
  <style type="text/css">

    .fas {
      font-weight: bold !important;
      font-family: FontAwesomeSolid !important;
    }

    .fas:before {
      font-weight: bold !important;
      font-family: FontAwesomeSolid !important;
    }

    .fab {
      font-weight: normal !important;
      font-family: FontAwesomeBrands !important;
    }

    .fab:before {
      font-weight: normal !important;
      font-family: FontAwesomeBrands !important;
    }

    .far {
      font-weight: normal !important;
      font-family: FontAwesomeRegular !important;
    }

    .far:before {
      font-weight: normal !important;
      font-family: FontAwesomeRegular !important;
    }

    * {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
    }

    body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: #fafafa;
    }

    .page {
      width: 202mm;
      min-height: 296.8mm;
      padding: 4mm;
      margin: 0 auto;
      /* border-radius: 5px; */
      background: white;
      font-size: 11pt;
      font-family: 'IBMPlexSerif', "Times New Roman", Times, serif;
      color: #3b4455;
      page-break-inside: avoid;
    }

    .page table {
      width: 100%;
      margin-bottom: 10px;
      border-collapse: collapse;
      font-size: 11px;
    }

    .page table thead tr.sub-title {
      border-width: 2px;
    }

    .page table tbody td {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
    }

    .page table tr.sub-title {
      border-bottom: 1px solid #6c757d;
      color: #6c757d;
      font-size: 11px;
    }

    .page table tr.sub-title td {
      padding: 4px;
      padding-top: -2px;
    }

    .page table tr td,
    .page table tr th {
      padding-top: 4px;
      padding-right: 4px;
      padding-bottom: 4px;
      padding-left: 4px;
    }

    .page table tr td:first-child,
    .page table tr th:first-child {
      padding-left: 0.25rem;
    }

    .page table tr td:last-child,
    .page table tr th:last-child {
      padding-right: 0.25rem;
    }

    .page table tr.px-2 td:first-child,
    .page table tr.px-2 th:first-child {
      padding-left: 0.5rem;
    }

    .page table tr.px-2 td:last-child,
    .page table tr.px-2 th:last-child {
      padding-right: 0.5rem;
    }

    .page table td {
      padding: 4px 0;
    }

    .page table.bordered {
      border: 1px solid #727272;
    }

    .page table.bordered tr,
    .page table.bordered td {
      border: 1px solid #727272;
    }

    .page table .v-align-bottom {
      vertical-align: bottom;
    }

    .page table.v-align-top tr td {
      vertical-align: top;
    }

    .page table .table-inside {
      font-size: 9px;
    }

    .page .title {
      font-size: 15px;
    }

    .page .sub-title {
      font-size: 13px;
    }

    .page .sub-title.underline {
      border-bottom: 1px solid #6c757d;
    }

    .page .title-color {
      color: #003a78;
    }

    .page .sub-title-color {
      color: #6c757d;
    }

    .page hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible;
      margin-top: 4px;
      margin-bottom: 4px;
      border: 0;
      border-top: 1px solid #003a78;
    }

    .page .border-box {
      border: 1px solid #bbbbbb;
      padding: 8px 12px;
    }

    .page .border-box span {
      display: inline-block;
    }

    .page .border-box span.letter-box {
      padding: 12px 6px;
      min-width: 24px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      color: #3b4455;
    }

    .page .border-box span.letter-box:not(:first-child) {
      margin-left: 4px;
    }

    .page .border-box span.letter-box.letter-1 {
      background-color: #e00005;
    }

    .page .border-box span.letter-box.letter-2 {
      background-color: #ef562f;
    }

    .page .border-box span.letter-box.letter-3 {
      background-color: #fe7220;
    }

    .page .border-box span.letter-box.letter-4 {
      background-color: #fa8f23;
    }

    .page .border-box span.letter-box.letter-5 {
      background-color: #feb61d;
    }

    .page .border-box span.letter-box.letter-6 {
      background-color: #d7d372;
    }

    .page .border-box span.letter-box.letter-7 {
      background-color: #a8d496;
    }

    .page .border-box span.letter-box.letter-8 {
      background-color: #85b995;
    }

    .page .border-box span.letter-box.letter-9 {
      background-color: #57a36b;
    }

    .page .border-box span.letter-box.letter-10 {
      background-color: #009247;
    }

    .page .border-box-pointer span {
      display: inline-block;
    }

    .page .border-box-pointer span.pointer-letter {
      min-width: 30px;
      transform: rotate(-90deg);
    }

    .page .border-box-pointer span.pointer-letter:not(:first-child) {
      margin-left: 4px;
    }

    .page .border-muted {
      border-color: #6c757d !important;
    }

    .page .border-grey {
      border-color: #ebebeb !important;
    }

    .page .border-white {
      border-color: #fff !important;
    }

    .page .border-secondary {
      border-color: #40576e;
    }

    .page .border-top {
      border-top: 1px solid #003a78;
    }

    .page .border-bottom {
      border-bottom: 1px solid #003a78;
    }

    .page .circle-symbol {
      height: 18px;
      width: 18px;
      display: block;
      text-align: center;
      border-radius: 2.5rem;
      position: absolute;
      margin-top: 6px;
      line-height: 1.1rem;
      color: #fff;
    }

    .page .bg-title-primary-light {
      background-color: #40576e;
      color: #fff;
      padding: 4px;
      font-size: 12px;
    }

    .page .left-border {
      padding-left: 6px;
      border-left: solid 3px #40576e;
    }

    .page .border-2px {
      border-width: 2px !important;
    }

    .page .mt-0 {
      margin-top: 0 !important;
    }

    .page .mb-0 {
      margin-bottom: 0 !important;
    }

    .page .mr-0 {
      margin-right: 0 !important;
    }

    .page .ml-0 {
      margin-left: 0 !important;
    }

    .page .my-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }

    .page .mx-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }

    .page .m-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
      margin-right: 0 !important;
      margin-left: 0 !important;
    }

    .page .pt-0 {
      padding-top: 0 !important;
    }

    .page .pb-0 {
      padding-bottom: 0 !important;
    }

    .page .pr-0 {
      padding-right: 0 !important;
    }

    .page .pl-0 {
      padding-left: 0 !important;
    }

    .page .py-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

    .page .px-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }

    .page .p-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
      padding-right: 0 !important;
      padding-left: 0 !important;
    }

    .page .mt-1 {
      margin-top: 0.25rem !important;
    }

    .page .mb-1 {
      margin-bottom: 0.25rem !important;
    }

    .page .mr-1 {
      margin-right: 0.25rem !important;
    }

    .page .ml-1 {
      margin-left: 0.25rem !important;
    }

    .page .my-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }

    .page .mx-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }

    .page .m-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }

    .page .pt-1 {
      padding-top: 0.25rem !important;
    }

    .page .pb-1 {
      padding-bottom: 0.25rem !important;
    }

    .page .pr-1 {
      padding-right: 0.25rem !important;
    }

    .page .pl-1 {
      padding-left: 0.25rem !important;
    }

    .page .py-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }

    .page .px-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }

    .page .p-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }

    .page .mt-2 {
      margin-top: 0.5rem !important;
    }

    .page .mb-2 {
      margin-bottom: 0.5rem !important;
    }

    .page .mr-2 {
      margin-right: 0.5rem !important;
    }

    .page .ml-2 {
      margin-left: 0.5rem !important;
    }

    .page .my-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }

    .page .mx-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }

    .page .m-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }

    .page .pt-2 {
      padding-top: 0.5rem !important;
    }

    .page .pb-2 {
      padding-bottom: 0.5rem !important;
    }

    .page .pr-2 {
      padding-right: 0.5rem !important;
    }

    .page .pl-2 {
      padding-left: 0.5rem !important;
    }

    .page .py-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }

    .page .px-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }

    .page .p-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }

    .page .mt-3 {
      margin-top: 1rem !important;
    }

    .page .mb-3 {
      margin-bottom: 1rem !important;
    }

    .page .mr-3 {
      margin-right: 1rem !important;
    }

    .page .ml-3 {
      margin-left: 1rem !important;
    }

    .page .my-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }

    .page .mx-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }

    .page .m-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }

    .page .pt-3 {
      padding-top: 1rem !important;
    }

    .page .pb-3 {
      padding-bottom: 1rem !important;
    }

    .page .pr-3 {
      padding-right: 1rem !important;
    }

    .page .pl-3 {
      padding-left: 1rem !important;
    }

    .page .py-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }

    .page .px-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }

    .page .p-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }

    .page .mt-4 {
      margin-top: 1.5rem !important;
    }

    .page .mb-4 {
      margin-bottom: 1.5rem !important;
    }

    .page .mr-4 {
      margin-right: 1.5rem !important;
    }

    .page .ml-4 {
      margin-left: 1.5rem !important;
    }

    .page .my-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }

    .page .mx-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }

    .page .m-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }

    .page .pt-4 {
      padding-top: 1.5rem !important;
    }

    .page .pb-4 {
      padding-bottom: 1.5rem !important;
    }

    .page .pr-4 {
      padding-right: 1.5rem !important;
    }

    .page .pl-4 {
      padding-left: 1.5rem !important;
    }

    .page .py-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }

    .page .px-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }

    .page .p-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }

    .page .mt-5 {
      margin-top: 3rem !important;
    }

    .page .mb-5 {
      margin-bottom: 3rem !important;
    }

    .page .mr-5 {
      margin-right: 3rem !important;
    }

    .page .ml-5 {
      margin-left: 3rem !important;
    }

    .page .my-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }

    .page .mx-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }

    .page .m-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }

    .page .pt-5 {
      padding-top: 3rem !important;
    }

    .page .pb-5 {
      padding-bottom: 3rem !important;
    }

    .page .pr-5 {
      padding-right: 3rem !important;
    }

    .page .pl-5 {
      padding-left: 3rem !important;
    }

    .page .py-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }

    .page .px-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }

    .page .p-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }

    .page .text-center {
      text-align: center !important;
    }

    .page .text-right {
      text-align: right !important;
    }

    .page .text-left {
      text-align: left !important;
    }

    .page .text-bold {
      font-family: 'IBMPlexSerifBold', 'IBMPlexSerif', 'Times New Roman', Times, serif;
      font-weight: bold !important;
    }

    .page .text-italic {
      font-family: 'IBMPlexSerifItalic', 'IBMPlexSerif', 'Times New Roman', Times, serif;
      font-style: italic !important;
    }

    .page .text-bigger-bold {
      font-size: 15px !important;
      font-family: 'IBMPlexSerifBold', 'IBMPlexSerif', 'Times New Roman', Times, serif;
    }

    .page .text-big {
      font-size: 13px !important;
    }

    .page .text-big-bold {
      font-size: 13px !important;
      font-family: 'IBMPlexSerifBold', 'IBMPlexSerif', 'Times New Roman', Times, serif;
    }

    .page .text-normal {
      font-size: 11px !important;
    }

    .page .text-small {
      font-size: 10px !important;
    }

    .page .text-smaller {
      font-size: 9px !important;
    }

    .page .text-smallest {
      font-size: 8px !important;
    }

    .page .text-tiny {
      font-size: 7px !important;
    }

    .page .page_break {
      page-break-before: always;
      break-before: always;
    }

    .page h1,
    .page h2,
    .page h3,
    .page h4,
    .page h5,
    .page h6 {
      font-weight: 300;
      margin: 10px 0 0;
    }

    .page h1 {
      font-size: 15px;
    }

    .page h2 {
      font-size: 13px;
    }

    .page h3 {
      font-size: 12px;
    }

    .page h4 {
      font-size: 11px;
    }

    .page h5 {
      font-size: 10px;
    }

    .page h6 {
      font-size: 9px;
    }

    .page .d-none {
      display: none !important;
    }

    .page .d-inline-block {
      display: inline-block !important;
    }

    .page .d-box {
      display: -webkit-box !important;
    }

    .page .width-content {
      width: fit-content;
    }

    .page .w-25 {
      width: 25%;
    }

    .page .w-30 {
      width: 30%;
    }

    .page .w-33 {
      width: 33.33%;
    }

    .page .w-50 {
      width: 50%;
    }

    .page .w-70 {
      width: 70%;
    }

    .page .w-75 {
      width: 75%;
    }

    .page .w-100 {
      width: 100%;
    }

    .page .badge {
      display: inline-block;
      padding: 0.25em 0.6em 0.35em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: 0.25rem;
      font-family: 'IBMPlexSerifBold', 'IBMPlexSerif';
    }

    .page .badge.badge-success {
      color: #fff;
      background-color: #28a745;
    }

    .page .badge.badge-danger {
      color: #fff;
      background-color: #dc3545;
    }

    .page .badge.badge-warning {
      color: #fff;
      background-color: #ff8f1f;
    }

    .page .badge.badge-secondary {
      color: #fff;
      background-color: #40576e;
    }

    .page .bg-click {
      background-color: #3b4455;
    }

    .page .bg-success {
      background-color: #28a745;
    }

    .page .bg-warning {
      background-color: #ff8f1f;
    }

    .page .bg-danger {
      background-color: #dc3545;
    }

    .page .bg-secondary {
      background-color: #40576e;
    }

    .page .bg-grey {
      background-color: #ebebeb;
    }

    .page .bg-muted {
      background-color: #6c757d;
    }

    .page .text-click {
      color: #3b4455 !important;
    }

    .page .text-muted {
      color: #6c757d;
    }

    .page .pill {
      border-radius: 4rem;
      padding-bottom: 6px;
    }

    @page {
      size: A4;
      margin: 0;
    }

    @media print {

      html,
      body {
        width: 210mm;
        height: 297mm;
      }
    }
  </style>
  <div class="page">
    <table id="header">
      <tr>
        <td style="width: 75%;">
        </td>
        <td style="width: 25%;">
          <span class="text-bold">PT Click</span><br />
          <span class="text-italic">
            Cyber 2 Tower 18th floor</br />
            Jl. H.R Rasuna Said blok X-5 no 13</br />
            Jakarta - 12950</br />
            Indonesia</br />
          </span>
          <span class="text-small" style="line-height: .6rem;">
            Telephone: +62 21 57998243</br />
            Fax: +62 21 5799 8244</br />
          </span>
        </td>
      </tr>
    </table>
    <h2 class="text-center mb-2 title">CLICK REPORT</h2>
    <h2 class="text-center text-bold mb-4 title">PUTRI NABILA</h2>
    <div class="text-normal">
      <div class="width-content d-inline-block">Request Date: <span class="text-bold">2022/01/02</span></div>
      <div class="ml-2 d-inline-block width-content"><span class="badge badge-success">Subject Matched</span></div>
    </div>

    <!-- FIRST CATEGORY -->
    <h2 class="text-center bg-grey pill title mb-3">SUBJECT</h2>

    <div class="title title-color text-big">Subject Data</div>
    <hr />
    <div class="p-2">
      <table id="subject-data-tbl">
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">CB Subject Code</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Provider Subject No</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Resident</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Name As Id</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Full Name</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Mother's Name</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Gender</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Date of Birth</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Place of Birth</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Marital Status</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Educational Status</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
      </table>
    </div>

    <div class="title title-color text-big">Addresses</div>
    <hr />
    <div>
      <table>
        <tr class="sub-title">
          <td class="w-70">Current - Address</td>
          <td class="w-30">Last Update Date</td>
        </tr>
        <tr>
          <td class="w-70 text-bold">Address</td>
          <td class="w-30 text-bold">Date</td>
        </tr>

        <!-- LOOP HISTORY ADDRESS -->
        <tr class="sub-title">
          <td class="w-70">Historical - Address</td>
          <td class="w-30">Last Update Date</td>
        </tr>
        <tr>
          <td class="w-70 text-bold">Address</td>
          <td class="w-30 text-bold">Date</td>
        </tr>
        <!-- LOOP HISTORY ADDRESS -->
      </table>
    </div>

    <div class="title title-color text-big">Identification Document</div>
    <hr />
    <div>
      <div class="sub-title sub-title-color underline w-50">Identity Codes</div>
      <div class="text-normal"><span class="sub-title-color">ID CARD:</span> 31207232505742224</div>
    </div>

    <div class="title title-color text-big mt-2">Contacts</div>
    <hr />
    <div class="p-2">
      <table id="subject-data-tbl">
        <tr class="sub-title">
          <td colspan="4">Current - Contact</td>
        </tr>
        <tr class="px-2">
          <td>
            <div class="sub-title sub-title-color">Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Cell Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Email Address</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr class="sub-title">
          <td colspan="4">Historical - Contact</td>
        </tr>

        <!-- HISTORY CONTACT LOOP -->
        <tr class="px-2">
          <td>
            <div class="sub-title sub-title-color">Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Cell Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Email Address</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr class="px-2">
          <td>
            <div class="sub-title sub-title-color">Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Cell Phone Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Email Address</div>
            <div class="text-bold">Text</div>
          </td>
          <td>
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <!-- HISTORY CONTACT LOOP -->

      </table>
    </div>
    <div style="page-break-after: always;"></div>

    <div class="title title-color text-big">Employment Data</div>
    <hr />
    <div class="p-2">
      <table id="subject-data-tbl">
        <tr class="sub-title">
          <td colspan="4">Current - Employment Data</td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Occupation</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Employer Sector</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place Address</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>

        <tr class="sub-title">
          <td colspan="4">Historical - Employment Data</td>
        </tr>

        <!-- HISTORY EMPLOYMENT DATA LOOP -->
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Occupation</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Employer Sector</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place Address</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Occupation</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Employer Sector</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Work Place Address</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Last Update Date</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <!-- HISTORY EMPLOYMENT DATA LOOP -->

      </table>
    </div>

    <!-- SECOND CATEGORY -->
    <h2 class="text-center bg-grey pill title mb-3">CB SCORE</h2>
    <div class="px-4">
      <table>
        <tr>
          <td class="w-30 pt-3">
            <div class="d-inline-block text-center" style="width: 48.5%;">
              <div class="text-bold text-big-bold">Score</div>
              <h4 class="text-bold text-bigger-bold">518</h4>
            </div>
            <div class="d-inline-block text-center" style="width: 48.5%;">
              <div class="text-bold text-big-bold">Risk Grade</div>
              <h4 class="text-bold text-bigger-bold">D</h4>
            </div>
            <div class="bg-warning text-center mt-1 text-bold" style="padding-bottom: 4px; padding-top: -2px;">HIGH RISK</div>
          </td>
          <td class="w-70 text-center">
            <div class="border-box">
              <span class="letter-box text-big-bold letter-1 mt-3" style="margin: 0 1px">A</span>
              <span class="letter-box text-big-bold letter-2 mt-3" style="margin: 0 1px">B</span>
              <span class="letter-box text-big-bold letter-3 mt-3" style="margin: 0 1px">C</span>
              <span class="letter-box text-big-bold letter-4 mt-3" style="margin: 0 1px">D</span>
              <span class="letter-box text-big-bold letter-5 mt-3" style="margin: 0 1px">E</span>
              <span class="letter-box text-big-bold letter-6 mt-3" style="margin: 0 1px">F</span>
              <span class="letter-box text-big-bold letter-7 mt-3" style="margin: 0 1px">G</span>
              <span class="letter-box text-big-bold letter-8 mt-3" style="margin: 0 1px">H</span>
              <span class="letter-box text-big-bold letter-9 mt-3" style="margin: 0 1px">I</span>
              <span class="letter-box text-big-bold letter-10 mt-3" style="margin: 0 1px">J</span>
            </div>
            <div class="border-box-pointer">
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
              <span class="pointer-letter" style="margin-top: 16px;"><img src="#" width="24px" height="auto" style="margin: 0 7px" /></span>
            </div>
          </td>
        </tr>
      </table>
    </div>

    <!-- THIRD CATEGORY -->
    <h2 class="text-center bg-grey pill title mb-3">CONTRACT SUMMARY</h2>

    <div class="title title-color text-big">Key Values</div>
    <hr />
    <div class="p-2">
      <table id="subject-data-tbl">
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Contracts number</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Reporting Providers Number</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Total Credit Limit</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Total Potential Exposure</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
        <tr>
          <td class="w-25">
            <div class="sub-title sub-title-color">Total Debit Balance</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Total Overdue</div>
            <div class="text-bold">Text</div>
          </td>
          <td class="w-25">
            <div class="sub-title sub-title-color">Currency</div>
            <div class="text-bold">Text</div>
          </td>
        </tr>
      </table>
    </div>

    <div class="title title-color text-big">Summary by Category and Phase</div>
    <hr />
    <div>
      <table>
        <tr class="sub-title">
          <td class="w-30">Contract Category</td>
          <td class="text-center">Requested</td>
          <td class="text-center">Refused</td>
          <td class="text-center">Renounced</td>
          <td class="text-center">Active</td>
          <td class="text-center">Closed</td>
        </tr>
        <tr class="sub-text-value text-bold">
          <td>CREDIT / FINANCING</td>
          <td class="text-center">1</td>
          <td class="text-center">0</td>
          <td class="text-center">0</td>
          <td class="text-center">2</td>
          <td class="text-center">0</td>
        </tr>
        <tr class="sub-text-value text-bold">
          <td>BOND / SECURITIES</td>
          <td class="text-center">1</td>
          <td class="text-center">0</td>
          <td class="text-center">0</td>
          <td class="text-center">2</td>
          <td class="text-center">0</td>
        </tr>
        <tr class="sub-text-value text-bold">
          <td>IRREVOCABLE LC</td>
          <td class="text-center">1</td>
          <td class="text-center">0</td>
          <td class="text-center">0</td>
          <td class="text-center">2</td>
          <td class="text-center">0</td>
        </tr>
        <tr class="sub-text-value text-bold">
          <td>BANK GUARANTEE</td>
          <td class="text-center">1</td>
          <td class="text-center">0</td>
          <td class="text-center">0</td>
          <td class="text-center">2</td>
          <td class="text-center">0</td>
        </tr>
        <tr class="sub-text-value text-bold">
          <td>OTHER FACILITIES</td>
          <td class="text-center">1</td>
          <td class="text-center">0</td>
          <td class="text-center">0</td>
          <td class="text-center">2</td>
          <td class="text-center">0</td>
        </tr>
      </table>
    </div>
    <div style="page-break-after: always;"></div>

    <div class="title title-color text-big">Financial Summary</div>
    <hr />
    <div class="px-2 mb-2">
      <table class="v-align-top">
        <tr>
          <td class="w-50 p-0 pr-1">
            <div>
              <span class="circle-symbol bg-success" style="margin-top: 10px;"><img src="#" width="8px" height="auto" style="margin-top: 5px;" /></span>
              <div style="width: calc(100% - 14px); margin-left: 24px; margin-top: -10px">
                <h6 class="text-bold">Credit / Financing</h6>
                <table>
                  <tr class="sub-title text-bold">
                    <td class="text-click" colspan="2">Active Credits/Financing: 2</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Credit Limit</td>
                    <td class="text-click text-bold w-30">IDR 1.400.000.000</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Debit Balance</td>
                    <td class="text-click text-bold w-30">IDR 780.000.000</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Overdue</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                </table>
              </div>
            </div>
          </td>
          <td class="w-50 pl-1">
            <div>
              <span class="circle-symbol bg-click" style="margin-top: 10px;"><img src="#" width="8px" height="auto" style="margin-top: 5px;" /></span>
              <div style="width: calc(100% - 14px); margin-left: 24px; margin-top: -10px">
                <h6 class="text-bold">Bond / Securities</h6>
                <table>
                  <tr class="sub-title text-bold">
                    <td class="text-click" colspan="2">Active Bond / Securities: 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Debit Balance</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Overdue</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>

                </table>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="w-50">
            <div>
              <span class="circle-symbol bg-click" style="margin-top: 10px;"><img src="#" width="8px" height="auto" style="margin-top: 5px;" /></span>
              <div style="width: calc(100% - 14px); margin-left: 24px; margin-top: -10px">
                <h6 class="text-bold">Irrevocable LC</h6>
                <table>
                  <tr class="sub-title text-bold">
                    <td class="text-click" colspan="2">Active Irrevocable LC: 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Credit Limit</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Debit Balance</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                </table>
              </div>
            </div>
          </td>
          <td class="w-50">
            <div>
              <span class="circle-symbol bg-click" style="margin-top: 10px;"><img src="#" width="8px" height="auto" style="margin-top: 5px;" /></span>
              <div style="width: calc(100% - 14px); margin-left: 24px; margin-top: -10px">
                <h6 class="text-bold">Bank Guarantee</h6>
                <table>
                  <tr class="sub-title text-bold">
                    <td class="text-click" colspan="2">Active Bank Guarantee: 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Credit Limit</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Debit Balance</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                </table>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="w-50">
            <div>
              <span class="circle-symbol bg-click" style="margin-top: 10px;"><img src="#" width="8px" height="auto" style="margin-top: 5px;" /></span>
              <div style="width: calc(100% - 14px); margin-left: 24px; margin-top: -10px">
                <h6 class="text-bold">Other Facilities</h6>
                <table>
                  <tr class="sub-title text-bold">
                    <td class="text-click" colspan="2">Active Other Facilities: 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Debit Balance</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                  <tr class="sub-title">
                    <td class="w-70">Overdue</td>
                    <td class="text-click text-bold w-30">IDR 0</td>
                  </tr>
                </table>
              </div>
            </div>
          </td>
          <td class="w-50"></td>
        </tr>
      </table>
    </div>

    <!-- FOUTH CATEGORY -->
    <div class="page-break"></div>
    <h2 class="text-center bg-grey pill title mb-3">CONTRACTS DETAILS</h2>

    <div class="bg-title-primary-light">Credit / Financing</div>
    <div class="left-border">
      <h5 class="text-bold">Credit / Financing Detail (Requested, Renounced and Refused):</h5>
      <div class="border-box px-0 py-1">
        <table>
          <thead>
            <tr class="sub-title text-click text-bold text-left v-align-bottom px-1 text-tiny">
              <th class="text-left">No</th>
              <th class="text-left">CB Contract Code</th>
              <th class="text-left">Provider Contract Number</th>
              <th class="text-left">Contract Type</th>
              <th class="text-left">Contract Phase</th>
              <th class="text-left">Role</th>
              <th class="text-left">Provider Type</th>
              <th class="text-left">Provider</th>
              <th class="text-left">Contract Request Date</th>
              <th class="text-left">Last Update Date</th>
              <th class="text-left">Linked Subjects List</th>
              <th class="text-left">Note</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-left v-align-bottom px-1 text-small">
              <td>1</td>
              <td>204198393</td>
              <td>-</td>
              <td>Credit Card</td>
              <td>Requested</td>
              <td>Borrower</td>
              <td>Conventional Commercial Bank</td>
              <td>BANK RAKYAT INDONESIA</td>
              <td>2020/10/10</td>
              <td>2022/01/21</td>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="left-border">
      <h5 class="text-bold">Credit / Financing Detail (Active, Closed, Closed in Advance):</h5>
      <div class="border-box px-0 py-1">
        <table class="text-small">
          <thead>
            <tr class="sub-title text-click text-bold text-left v-align-bottom px-1 text-tiny">
              <th class="text-left">No</th>
              <th class="text-left">CB Contract Code</th>
              <th class="text-left">Provider Contract Number</th>
              <th class="text-left">Contract Type</th>
              <th class="text-left">Contract Phase</th>
              <th class="text-left">Role</th>
              <th class="text-left">Start Date</th>
              <th class="text-left">Due Date</th>
              <th class="text-left">Collaterals Counter</th>
              <th class="text-left">Total Collaterals Value</th>
              <th class="text-left">Guarantors Counter</th>
              <th class="text-left">Provider Type</th>
              <th class="text-left">Provider</th>
              <th class="text-left">Last Update Date</th>
              <th class="text-left">Linked Subjects List</th>
              <th class="text-left">Note</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-left v-align-bottom px-1 text-tiny">
              <td>1</td>
              <td>204198393</td>
              <td>-</td>
              <td>Credit Card</td>
              <td>Requested</td>
              <td>Borrower</td>
              <td>Conventional Commercial Bank</td>
              <td>BANK RAKYAT INDONESIA</td>
              <td>2020/10/10</td>
              <td>2022/01/21</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>
            <tr class="text-left v-align-bottom px-1">
              <td class="border-top border-muted"></td>
              <td colspan="13" class="border-top border-muted">
                <table class="bordered text-bold text-center table-inside">
                  <tr>
                    <td></td>
                    <td>Jan</td>
                    <td>Feb</td>
                    <td>Mar</td>
                    <td>Apr</td>
                    <td>Mei</td>
                    <td>Jun</td>
                    <td>Jul</td>
                    <td>Agu</td>
                    <td>Sep</td>
                    <td>Okt</td>
                    <td>Nov</td>
                    <td>Des</td>
                  </tr>
                  <tr>
                    <td>2020</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-warning">1-89</td>
                    <td class="bg-success">OK</td>
                  </tr>
                  <tr>
                    <td>2020</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-grey">N/A</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-success">OK</td>
                    <td class="bg-warning">1-89</td>
                    <td class="bg-success">OK</td>
                  </tr>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="page-break-after: always;"></div>
      <h5 class="text-bold">Detail of Credit / Financing 1: Credit Card - Active</h5>
      <div class="bg-grey">
        <table>
          <tr class="px-2">
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider Type</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">CB Contract Code</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider Contract No</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Role</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Last Update Date</td>
          </tr>
          <tr class="px-2">
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
          </tr>
        </table>
      </div>
      <div class="border-box">
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Start Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Due Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Past Due Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Contract Status</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Contract Status Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Information</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="page-break"></div>
    <div class="left-border">
      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Historical Data</h5>
        <hr />
        <table>
          <thead>
            <tr class="text-bold sub-title border-muted text-click text-left">
              <th>Reference Date</th>
              <th>Days Past Due</th>
              <th>Overdue</th>
              <th>Bad Credit Cause</th>
              <th>Debit Balance</th>
              <th>Current Month Realization</th>
              <th>Contract Status</th>
            </tr>
          </thead>
          <tbody>

            <!-- HISTORICAL DATA LOOP -->
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
            <!-- HISTORICAL DATA LOOP -->

          </tbody>
        </table>
      </div>
    </div>

    <div class="page-break"></div>
    <div class="left-border">
      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Granted Credits</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Characteristic Credit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Agreement Credit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Original Agreement Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Original Agreement Date</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Agreement Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Agreement Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Frequency</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Start Date</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Debtor Category</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Usage Type</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Usage Orientation</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Economic Sector</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">City</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Project Value</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Type of Interest Rate</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Interest Rate</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Financing Program</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Credit Limit/Debit Balance</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Initial Credit Limit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Limit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Current Month Realization</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Debit Balance</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Value in Original Currency</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Overdue</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Principal Overdue Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Interest Overdue Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Days Past Due</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Overdue Payments Number</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bad Credit Cause</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bad Credit Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Penalty</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <div style="page-break-after: always;"></div>
        <h5 class="text-bold mt-0 text-bold">Restructuring</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Restructuring Plan</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Initial Restructuring Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Restructuring Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Frequency of Restructuring</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Credits Maximum</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Number Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Days Past Due</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Days Past Due Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Worst Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Worst Status Date</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>
      </div>

      <h5 class="text-bold">Detail of Credit / Financing 2: Loans provided - Active</h5>
      <div class="bg-grey">
        <table>
          <tr class="px-2">
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider Type</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">CB Contract Code</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Provider Contract No.</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Role</td>
            <td class="sub-title sub-title-color text-bold text-normal" style="width: 16%;">Last Update Date</td>
          </tr>
          <tr class="px-2">
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
            <td class="text-bold">Title</td>
          </tr>
        </table>
      </div>
      <div class="border-box">
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Start Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Due Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Past Due Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Contract Status</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Contract Status Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Information</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="page-break"></div>
    <div class="left-border">
      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Historical Data</h5>
        <hr />
        <table>
          <thead>
            <tr class="text-bold sub-title border-muted text-click text-left">
              <th>Reference Date</th>
              <th>Days Past Due</th>
              <th>Overdue</th>
              <th>Bad Credit Cause</th>
              <th>Debit Balance</th>
              <th>Current Month Realization</th>
              <th>Contract Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
            <tr class="border-bottom border-muted text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td>-</td>
              <td>IDR 430.000.000</td>
              <td>IDR 0</td>
              <td>Active Facilities</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="page-break"></div>
    <div class="left-border">
      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Granted Credits</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Characteristic Credit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Agreement Credit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Agreement Credit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Agreement Credit</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Agreement Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Agreement Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Frequency</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Start Date</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Debtor Category</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Usage Type</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Usage Orientation</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Economic Sector</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">City</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Project Value</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Type of Interest Rate</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Interest Rate</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Financing Program</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Credit Limit/Debit Balance</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Initial Credit Limit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Credit Limit</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Current Month Realization</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Debit Balance</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Value in Original Currency</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <div style="page-break-after: always;"></div>
        <h5 class="text-bold mt-0 text-bold">Overdue</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Principal Overdue Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Interest Overdue Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Days Past Due</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Overdue Payments Number</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bad Credit Cause</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bad Credit Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Penalty</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Restructuring</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Restructuring Plan</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Initial Restructuring Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Final Restructuring Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Frequency of Restructuring</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Credits Maximum</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Amount</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Overdue Payments Number Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Days Past Due</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Max Days Past Due Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Worst Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Worst Status Date</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="page-break"></div>
    <div class="left-border">
      <h5 class="text-bold">Detail of Collaterals 1: Machine</h5>
      <div class="border-box p-1">
        <table>
          <thead>
            <tr class="text-bold sub-title border-muted text-click text-left">
              <th class="w-25">Provider Type</th>
              <th class="w-25">Provider</th>
              <th class="w-25">Last Update Date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-grey text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Granted Collateral</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Rating</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Rating Institution</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bind Type</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Bind Date</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Owner Name</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Proof of Ownership</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Common Collateral Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Common Collateral Percentage</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Joint Account Credit Status</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Insured</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Information</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Collateral Value</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Value NJOP</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Value Reporter</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Assessment Date Reporter</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Collateral Value Indipendent Assersors</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Independent Assessors Name</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Assessment Date Indipendent Assersors</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Collateral Address</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Address</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
            </td>
            <td class="w-25">
            </td>
            <td class="w-25">
            </td>
          </tr>
        </table>
      </div>

      <div style="page-break-after: always;"></div>
      <h5 class="text-bold">Detail of Guarantor 1: State government</h5>
      <div class="border-box p-1">
        <table>
          <thead>
            <tr class="text-bold sub-title border-muted text-click text-left">
              <th class="w-25">Provider Type</th>
              <th class="w-25">Provider</th>
              <th class="w-25">Last Update Date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-grey text-muted">
              <td>21 Dec</td>
              <td>0</td>
              <td>IDR 0</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="border-box p-1">
        <h5 class="text-bold mt-0 text-bold">Granted Guarantor</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Guarantor Name as ID</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Guarantor Full Name</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Percentage Guaranteed</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Information</div>
              <div class="text-bold">Text</div>
            </td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Guarantor Identity</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Identity Type</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
              <div class="sub-title sub-title-color">Identity Number</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25"></td>
            <td class="w-25"></td>
          </tr>
        </table>

        <h5 class="text-bold mt-0 text-bold">Guarantor Address</h5>
        <hr />
        <table>
          <tr>
            <td class="w-25">
              <div class="sub-title sub-title-color">Address</div>
              <div class="text-bold">Text</div>
            </td>
            <td class="w-25">
            </td>
            <td class="w-25">
            </td>
            <td class="w-25">
            </td>
          </tr>
        </table>
      </div>
    </div>

    <!-- FIFTH CATEGORY -->
    <div class="page-break"></div>
    <h2 class="text-center bg-grey pill title mb-3">ACCOUNT RECEIVABLES / PAYABLES</h2>
    <div class="title title-color text-big">General Business Company</div>
    <hr />
    <table>
      <tr class="sub-title border-muted text-smaller">
        <td colspan="4" class="p-0 py-1">Open Transactions</td>
      </tr>
      <tr class="sub-title border-2px px-2 text-smallest">
        <td class="pt-3 pb-1">Provider</td>
        <td class="pt-3 pb-1">Transaction Type</td>
        <td class="pt-3 pb-1">Transaction Amount</td>
        <td class="pt-3 pb-1">Document Date</td>
        <td class="pt-3 pb-1">Expiry/Due Date</td>
        <td class="pt-3 pb-1">Closing Date</td>
        <td class="pt-3 pb-1">Dispute Flag</td>
        <td class="pt-3 pb-1">Dispute Date</td>
        <td class="pt-3 pb-1">Last Reference Date</td>
      </tr>
      <tr class="text-click text-bold px-2 text-small">
        <td>Provider</td>
        <td>Transaction Type</td>
        <td>Transaction Amount</td>
        <td>Document Date</td>
        <td>Expiry/Due Date</td>
        <td>Closing Date</td>
        <td>Dispute Flag</td>
        <td>Dispute Date</td>
        <td>Last Reference Date</td>
      </tr>
    </table>

    <!-- SIXTH CATEGORY -->
    <h2 class="text-center bg-grey pill title mb-3">ADDITIONAL INFORMATION</h2>
    <div class="bg-title-primary-light mb-1 ">Debt Mediations</div>
    <div class="d-box bg-grey mb-1">
      <table class="mb-2">
        <tr class="px-2 border-bottom border-white text-small">
          <td class="sub-title sub-title-color text-normal w-33">Additional Information No </td>
          <td class="sub-title sub-title-color text-normal w-33">Provider Type</td>
          <td class="sub-title sub-title-color text-normal w-33">Provider</td>
        </tr>
        <tr class="px-2 text-small">
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
        </tr>
      </table>
    </div>
    <div class="mb-1">
      <table>
        <tr class="px-2 border-bottom border-gray border-2px text-small">
          <td class="sub-title sub-title-color text-normal">No.</td>
          <td class="sub-title sub-title-color text-normal">Information Type</td>
          <td class="sub-title sub-title-color text-normal">Details</td>
          <td class="sub-title sub-title-color text-normal">Status</td>
          <td class="sub-title sub-title-color text-normal">Status Date</td>
          <td class="sub-title sub-title-color text-normal">Last Reference Date</td>
        </tr>
        <tr class="px-2 text-small">
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
        </tr>
      </table>
    </div>

    <!-- ADDITIONAL INFORMATION LOOP -->
    <div class="d-box bg-grey mb-1">
      <table class="mb-2">
        <tr class="px-2 border-bottom border-white text-small">
          <td class="sub-title sub-title-color text-normal w-33">Additional Information No</td>
          <td class="sub-title sub-title-color text-normal w-33">Provider Type</td>
          <td class="sub-title sub-title-color text-normal w-33">Provider</td>
        </tr>
        <tr class="px-2 text-small">
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
        </tr>
      </table>
    </div>
    <div class="mb-1">
      <table>
        <tr class="px-2 border-bottom border-gray border-2px text-small">
          <td class="sub-title sub-title-color text-normal">No.</td>
          <td class="sub-title sub-title-color text-normal">Information Type</td>
          <td class="sub-title sub-title-color text-normal">Details</td>
          <td class="sub-title sub-title-color text-normal">Status</td>
          <td class="sub-title sub-title-color text-normal">Status Date</td>
          <td class="sub-title sub-title-color text-normal">Last Reference Date</td>
        </tr>
        <tr class="px-2 text-small">
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
        </tr>
      </table>
    </div>

    <!-- SEVENTH CATEGORY -->
    <div style="page-break-after: always;"></div>
    <div class="page-break"></div>
    <h2 class="text-center bg-grey pill title mb-3">NEGATIVE EVENTS</h2>
    <div class="mb-1">
      <table>
        <tr class="px-2 border-bottom border-gray border-2px text-small">
          <td class="sub-title sub-title-color text-normal">No.</td>
          <td class="sub-title sub-title-color text-normal">Event</td>
          <td class="sub-title sub-title-color text-normal">Event Details</td>
          <td class="sub-title sub-title-color text-normal">Event Date</td>
          <td class="sub-title sub-title-color text-normal">Event Expiry Date</td>
          <td class="sub-title sub-title-color text-normal">Provider Type</td>
          <td class="sub-title sub-title-color text-normal">Provider</td>
          <td class="sub-title sub-title-color text-normal">Last Reference Date</td>
        </tr>
        <tr class="px-2 text-small">
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
          <td class="text-bold">Text</td>
        </tr>
      </table>
    </div>

    <!-- EIGHT CATEGORY -->
    <h2 class="text-center bg-grey pill title mb-3">FOOTPRINT</h2>
    <div class="title title-color text-big">Number of Enquiries in the last months</div>
    <hr />
    <table>
      <tr>
        <td class="w-25">
          <div class="sub-title sub-title-color">1 Month</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">3 Month</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">6 Month</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">12 Month</div>
          <div class="text-bold">Text</div>
        </td>
      </tr>
    </table>

    <div class="title title-color text-big">Last 15 Enquiries</div>
    <hr />
    <table>
      <tr>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Date</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Purpose</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Institute</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Type</div>
          <div class="text-bold">Text</div>
        </td>
      </tr>

      <!-- LAST 15 INQUIRIES LOOP -->
      <tr>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Date</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Purpose</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Institute</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Type</div>
          <div class="text-bold">Text</div>
        </td>
      </tr>
      <tr>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Date</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Purpose</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Institute</div>
          <div class="text-bold">Text</div>
        </td>
        <td class="w-25">
          <div class="sub-title sub-title-color">Enquiry Type</div>
          <div class="text-bold">Text</div>
        </td>
      </tr>
      <!-- LAST 15 INQUIRIES LOOP -->

    </table>

  </div>
</body>

</html>