<?php




$lineitem = json_decode(json_encode($lineitem_info), True);


$fb=json_decode(json_encode($fb_info), True);



						
?>

<!DOCTYPE html>
<html lang="en-US" style=""><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>

    <style>
    /*!
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  margin: .67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -.5em;
}
sub {
  bottom: -.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: .35em .625em .75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
html {
  font-size: 10px;

  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
       -o-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
small,
.small {
  font-size: 85%;
}
mark,
.mark {
  padding: .2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  -webkit-box-shadow: none;
          box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  min-height: 34px;
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #337ab7;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity .15s linear;
       -o-transition: opacity .15s linear;
          transition: opacity .15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
       -o-transition-timing-function: ease;
          transition-timing-function: ease;
  -webkit-transition-duration: .35s;
       -o-transition-duration: .35s;
          transition-duration: .35s;
  -webkit-transition-property: height, visibility;
       -o-transition-property: height, visibility;
          transition-property: height, visibility;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  padding-right: 15px;
  padding-left: 15px;
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
  -webkit-transition: width .6s ease;
       -o-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
          background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-right: 15px;
  padding-left: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, .15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: .2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: .5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
       -o-transition:      -o-transform .3s ease-out;
          transition:         transform .3s ease-out;
  -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
       -o-transform: translate(0, -25%);
          transform: translate(0, -25%);
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
       -o-transform: translate(0, 0);
          transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5;
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  filter: alpha(opacity=0);
  opacity: 0;

  line-break: auto;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

  line-break: auto;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, .25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, .25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
       -o-transition: .6s ease-in-out left;
          transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  background-color: rgba(0, 0, 0, 0);
  filter: alpha(opacity=50);
  opacity: .5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
  text-shadow: none;
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
.visible-print {
  display: none !important;
}
.visible-print-block {
  display: none !important;
}
.visible-print-inline {
  display: none !important;
}
.visible-print-inline-block {
  display: none !important;
}
/*# sourceMappingURL=bootstrap.css.map */

     </style>
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
/* styles start Here */

.jdx-login-content {
   box-sizing: border-box;
   -moz-box-sizing: border-box;
   -webkit-box-sizing: border-box;
   -ms-box-sizing: border-box;
}
body {
  background:#f0f0ef;
  line-height:1;
  font-size:12px;
  color:#434648;
  font-family: 'Lato-Regular';
}
a {
  color: #717070;
  text-decoration: none;
}
a:hover, a:focus {
  border: none;
  outline: none;
  color: #85bb24;
}
h1, h2, h3, h4, h5, h6 {
  font-family: 'Arial', sans-serif;
  font-weight: bolder;
}
h1.logo-title {
  width:108px;
  height:30px;
  margin:40px 0 0 0;  
  
}
h1.logo-title a {
    display: block;
    background: url(img/login-logo.png) no-repeat center center;
    font-size: 0;
    width: 100%;
    height: 100%;
}
.jdx-login-wrapper {
  max-width:900px;
  margin:0 auto;
}
.jdx-login-footer {
  background: #fff;
  padding:20px;
  position: relative;
  bottom: 0;
  left:0;
  right:0;
}
.jdx-login-footer h6 {
  width:244px;
  height:15px;
}
.jdx-login-footer h6 a {
    display: block;
    background: url(img/login-footer-logo.png) no-repeat center center;
    font-size: 0;
    width: 100%;
    height: 100%;
}
.jdx-login-announcement h2 {
    text-transform: uppercase;
    font-size: 16px;
    padding: 20px;
}
.jdx-login-main {
  margin:0;
}
.jdx-login-announcement  {
    display: inline-block;
    width: 62%;
    vertical-align: top;
}
.jdx-loginform {
    display: inline-block;
    width: 37.5%;
    vertical-align: top;
}
div.text label, div.password label {display: none;}
div.text input, div.password input {
  background: #f1f1f1;
  border: 1px solid #e3e3e3;
  border-left:none;
  font-size:14px;
  color: #6c6e6f;
  padding:13px 8px;
  width: 100%;
  font-family: Lato-Regular;
}
div.text, div.password {
  border-left:5px solid #85bb24;
}
div.input input:focus {
  outline: none;
}
div.input {margin:15px 0 0 0;}
.jdx-loginform h3 {width:133px;
height: 38px;
background: url(img/login-jdanalytics.png) no-repeat center center;
font-size: 0;
}
.submit input {
      background: #85bb24;
    border: none;
    color: #fff;
    padding: 10px;
    min-width: 80px;
    text-align: center;
    cursor: pointer;
}
.submit input:hover, .submit input:focus {
  background:#434648;
  outline:none;
}
.submit {margin: 15px 0;}
div.checkbox {width:49%; display: inline-block; position: relative;}
div.input label {
    color: #8e8f90;
    font-size: 12px;
}
div.checkbox input {    
  vertical-align: top;
    margin: 0;
    position: absolute;
    left: 0;
    top: 0;
 }
 div.checkbox label {
  position: absolute;
  top:0;
  left: 0;
 }
 
 div.checkbox label span {
   width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: #f0f0ef;
 }
 .squaredFour label span:after {
    content: '';
    width: 9px;
    height: 5px;
    position: absolute;
    top: 4px;
    left: 4px;
    border: 3px solid #333;
    border-top: none;
    border-right: none;
    background: transparent;
    opacity: 0;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
 div.checkbox input[type=checkbox]:checked + label span:after {
    opacity: 1;
}



.sg-replace-icons input[type=checkbox] + label:before {
    content: " ";
    display: inline-block;
    background-image: url('img/unchecked.png');
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 10px;
}
.sg-replace-icons input[type=checkbox]:checked + label:before {
    content: " ";
    display: inline-block;
    background-image: url('img/checked.png');
    width: 20px;
    height: 20px;
}
.sg-replace-icons input[type=checkbox] + label{
     user-select: none;
}
div.checkbox {
    height: 20px;
}
.jdx-login-wrapper{
    text-align: center;
}
.jdx-login-announcement{
    background: #fff;
    min-height: 302px;
    text-align: left;
}
.jdx-loginform{
    background: #fff;
    min-height: 302px;
    text-align: left;
}
.jdx-login-main{
    position:absolute;
    display: table;
    width: 100%;
    height: 100%;
    top:0;
}
.jdx-main-content-wrapper{
    display: table-cell;
    vertical-align: middle; 
}   

    .jdx-login-main{
        position: static;
    }
    .jdx-login-footer{
        padding: 20px 20px 17px;
    }
    .jdx-login-main{
        height: auto;
    padding-top:8%;
    }
    html{
        height: 100%;
        color: #717070;
    }
    body{
        height: 100%;
    }
    .jdx-login-content{
        min-height: 100%;
    }
    .jdx-login-content{
        background: url(img/rocket-01.png) no-repeat center top;
        background-size: cover;
        margin: 0 -15px;
    }
    .jdx-login-announcement{
        width: 581px;
    min-height: 318px;
        float: left;
        display: block;
        margin-left: 2px;
        margin-top: 2px;
    }
    .jdx-loginform{
        width: 221px;
        padding: 23px;
        float: left;
        display: block;
        margin-left: 2px;
        margin-top: 2px;
    min-height:302px;
        padding-bottom:15px;
    }
    div.text input, div.password input{
        padding: 13px 8px;
        width: 220px;
        border: 1px solid #e3e3e3;
        box-sizing:border-box;
        margin: 5px 0;
        font-size: 15px;
    }
    div.input{
        margin: 0;
        border: 0;
    }
    .jdx-loginform h3{
        margin-bottom: 16px;
    }
    .submit input{
        padding: 9px;
        background:#f17337;
        text-transform: uppercase;
        width: 100%;
        font-family: DINBlack;
        font-weight: normal;
    }
    div.input label{
        color: #717070;
    }
    .jdx-login-wrapper{
        max-width: 853px;
    }
.jdx-login-announcement h2{
    color:#4a4a4a;
    font-size: 15px;
}
.forgotpwd{
    display: none;
}
    .clearfix:after {
  content: "";
  display: table;
  clear: both;
}
#viewpassword{
    position: absolute;
    top: 6px;
    right: 0;
    height: 45px;
    width: 41px;
    background: url(img/viewpwd.png) center center no-repeat;
    cursor: pointer;
}
div.password input{     
    padding: 13px 41px 13px 8px;
}
.jdx-login-wrapper{
    padding:0 15px; 
}

    </style>
    <style>
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
.fb-img{
	display: none;
}
.dfp-img{
	display: none;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
    </style>
  
    <style>
.jquery-timepicker,
.jquery-timepicker * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.jquery-timepicker {
  background: transparent;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  color: black;
  display: block !important;
  height: auto;
  margin: 0;
  padding: 20px;
  width: 36px;
  position: fixed;
  top: 22px;
  right: 15px;
  padding: 0;
  z-index: 9999999;
}

.jquery-timepicker-clock {
  border: 1px solid #dedede;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  height: 34px;
  position: relative;
  width: 34px;
  background: #f7f7f7;
}
.jquery-timepicker-clock:hover{
  cursor: pointer;
}
.jquery-timepicker-minute-number {
  height: 20px;
  line-height: 20px;
  position: absolute;
  text-align: center;
  width: 20px;
  display: none;
}

.jquery-timepicker-minute-small,
.jquery-timepicker-minute-big {
  background: #4e4e4e;
  position: absolute;
  -webkit-transform-origin: 50% 100px;
  -ms-transform-origin: 50% 100px;
  transform-origin: -5% 17px;
}

.jquery-timepicker-minute-small {
  height: 2px;
  margin: 0 17px 0;
  width: 1px;
  display: none;
}

.jquery-timepicker-minute-big {
  height: 4px;
  margin: 0 17px 11px;
  width: 1px;
}

.jquery-timepicker-minutes-hand,
.jquery-timepicker-hours-hand {
  background: #4e4e4e;
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: grab;
  position: absolute;
  -webkit-transform-origin: 50% bottom;
  -ms-transform-origin: 50% bottom;
  transform-origin: 50% bottom;
}

body.jquery-timepicker-touch .jquery-timepicker-minutes-hand:after,
body.jquery-timepicker-touch .jquery-timepicker-hours-hand:after {
  background: black;
  bottom: 20px;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  content: '';
  height: 20px;
  left: -8px;
  position: absolute;
  width: 20px;
  display: none;
}

body.jquery-timepicker-touch .jquery-timepicker-minutes-hand:after {
  bottom: 40px;
}

.jquery-timepicker-grabbing .jquery-timepicker-hand {
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: grabbing;
}

.jquery-timepicker-minutes-hand  {
  height: 11px;
  margin: 6px 0 0 17px;
  width: 1px;
}

.jquery-timepicker-hours-hand  {
  height: 10px;
  margin: 7px 0 0 17px;
  width: 1px;
}

.jquery-timepicker-middle {
  background: #4e4e4e;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  height: 4px;
  margin: 15px;
  position: absolute;
  width: 4px;
  z-index: 99;
}

.jquery-timepicker-am-button,
.jquery-timepicker-pm-button {
  border: 2px solid black;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  cursor: pointer;
  left: -10px;
  padding: 2px 4px;
  position: absolute;
  top: -10px;
  display: none;
}

.jquery-timepicker-pm-button {
  left: auto;
  right: -10px;
}

.jquery-timepicker-am-button.active,
.jquery-timepicker-pm-button.active {
  background: black;
  color: white;
  cursor: default;
  display: none;
}

body.jquery-timepicker-grabbing {
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: grabbing;
}
span.timezone.activeclock, input.timezone.active{
  display: none !important;
}
.clock-animation {
    position: fixed;
    right: 20px;
    top: 0;
}
.jd-clock-dropdown {
  position: absolute;
  width: 100px;
  right: 0px;
  top: 51px;
  background: #fff;
  z-index: 1;
  -webkit-box-shadow: 0 2px 2px 1px rgba(0,0,0,0.1);
  box-shadow: 0 2px 2px 1px rgba(0,0,0,0.1);
  font-family: "Lato-Regular" !important;
  display: none;
  z-index: 999999;
}
.jd-clock-dropdown span {
  display:block !important;
    height: 30px;
  line-height: 30px;
  padding: 0 10px;
  font-size: 11px;
}
.jd-clock-dropdown span.timezone em {
    display: inline-block;
    float: right;
    font-style: normal;
}
.jd-clock-dropdown span.timezone:hover{
  background: #f7f7f7;
  cursor: pointer;
}
.clockanim{
  width: 38px;
    height: 38px;
    float: right;
    margin: 0 0 0 20px;
    position: absolute;
    right: 0 ;
    top: 22px;
    z-index: 99999999 !important;
    cursor: pointer;
}
    </style>
    <style>
/*  INSPINIA - Responsive Admin Theme *  version 2.4 **/
body {
    font-family: 'Trebuchet MS', sans-serif;
    font-weight: bold;
  background-color: #fff;
  font-size: 12px;
  color: #676a6c;
  overflow-x: hidden;
}
h1 {
  font-size: 30px;
}
h2 {
  font-size: 24px;
}
h3 {
  font-size: 16px;
}
h4 {
  font-size: 14px;
}
h5 {
  font-size: 12px;
}
h6 {
  font-size: 10px;
}
h3, h4, h5 {
  margin-top: 5px;
}
a{
  color: #80c142;
}
a:hover{
  color: #f17336;
}
.pt0{
  padding-top: 0 !important;
}
.p0{
  padding: 0 !important;
}
.mb0{
  margin-bottom: 0 !important;
}
.mb10{
  margin-bottom: 10px !important;
}
.mb20{
  margin-bottom: 20px !important;
}
.mt10{
  margin-top: 10px !important;
}
.mt25{
  margin-top: 25px !important;
}
.mt76{
  margin-top: 76px !important;
}
.pl35{
  padding-left: 35px !important;
}
.pr35{
  padding-right: 35px !important;
}
.nav > li > a {
  color: #e3e5ea;
  font-weight: 600;
  padding: 14px 20px 14px 25px;
}
.nav.navbar-right > li > a {
  color: #4c4c4c;
}
.nav.navbar-top-links > li > a:hover,
.nav.navbar-top-links > li > a:focus {
  background-color: transparent;
}
.nav > li > a i {
  margin-right: 6px;
}
.navbar {
  border: 0;
}
.navbar-default {
  background-color: #575656;
  border-color: #2f4050;
}
.navbar-top-links li:last-child {
  margin-right: 70px;
}
.navbar-top-links li .dropdown-menu li:last-child {
  margin-right: 0px;
}
.navbar-top-links li a {
  padding: 10px;
  min-height: 40px;
}
.navbar-top-links li.dropdown{
  margin-top: 3px;
}
nav .dropdown-menu {
    position: absolute;
    right: -20px;
    z-index: 999;
    top: 48px;
    background-color: #fff;
    -webkit-box-shadow: 0 3px 8px rgba(0,0,0,0.175);
    box-shadow: 0 3px 8px rgba(0,0,0,0.175);
    background-clip: padding-box;
    display: none;
    border: none !important;
    border-radius: 0;
    font-family: 'Lato-Regular' !important;
    padding: 0;
    min-width: auto;
    right: auto !important;
    left: 0 !important;
}
nav ul.dropdown-menu li {
    text-align: left;
    padding: 0;
    margin: 0 !important;
}
nav ul.dropdown-menu li a {
    background: none;
    float: none;
    display: block;
    padding: 7px 20px;
    margin: 0 !important;
    height: auto !important;
    line-height: 20px !important;
    font-size: 12px;
    font-weight: normal;
    text-align: left;
    transition: all 0.5s;
    min-height: auto;
    color: #676767;
}
.user-image{
  width: 30px;
  height: 30px;
  border-radius: 100%;
  display: inline-block;
  vertical-align: middle;
}
a#userLogged{
  display: inline-block;
  font-family: 'Lato-Regular';
  font-weight: normal;
  text-transform: capitalize;
  letter-spacing: 0.5px;
  margin: 0 0 0 5px;
  background: none !important;
  vertical-align: middle;
  line-height: 40px;
}
.navbar-top-links .dropdown-messages {
  margin-left: 5px;
}
.navbar-top-links .dropdown-tasks {
  margin-left: -59px;
}
.navbar-top-links .dropdown-alerts {
  margin-left: -123px;
}
.navbar-top-links .dropdown-user {
  right: 0;
  left: auto;
}
.dropdown-messages,
.dropdown-alerts {
  padding: 10px 10px 10px 10px;
}
.dropdown-messages li a,
.dropdown-alerts li a {
  font-size: 12px;
}
.dropdown-messages li em,
.dropdown-alerts li em {
  font-size: 10px;
}
.nav.navbar-top-links .dropdown-alerts a {
  font-size: 12px;
}
.nav-header {
  padding: 33px 25px;
  background: url("patterns/header-profile.png") no-repeat;
}
.pace-done .nav-header {
  transition: all 0.4s;
}
.nav > li.active {
  border-left: 4px solid #f7b534;
  background: #293846;
}
.nav.nav-second-level > li.active {
  border: none;
}
.nav.nav-second-level.collapse[style] {
   height: auto !important;
}
.nav-header a {
  color: #DFE4ED;
}
.nav-header .text-muted {
  color: #8095a8;
}
.minimalize-styl-2 {
  padding: 4px 12px;
  margin: 14px 5px 5px 20px;
  font-size: 14px;
  float: left;
}
.navbar-form-custom {
  float: left;
  height: 50px;
  padding: 0;
  width: 200px;
  display: inline-table;
}
.navbar-form-custom .form-group {
  margin-bottom: 0;
}
.nav.navbar-top-links a {
  font-size: 14px;
}
.navbar-form-custom .form-control {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
  border: medium none;
  font-size: 14px;
  height: 60px;
  margin: 0;
  z-index: 2000;
}
.count-info .label {
  line-height: 12px;
  padding: 2px 5px;
  position: absolute;
  right: 6px;
  top: 12px;
}
.arrow {
  float: right;
}
.fa.arrow:before {
  content: "\f104";
}
.active > a > .fa.arrow:before {
  content: "\f107";
}
.nav-second-level li,
.nav-third-level li {
  border-bottom: none !important;
}
.nav-second-level li a {
  padding: 7px 10px 7px 10px;
  padding-left: 52px;
}
.nav-third-level li a {
  padding-left: 62px;
}
.nav-second-level li:last-child {
  margin-bottom: 10px;
}

body:not(.fixed-sidebar):not(.canvas-menu).mini-navbar .nav li:hover > .nav-second-level,
.mini-navbar .nav li:focus > .nav-second-level {
  display: block;
  border-radius: 0 2px 2px 0;
  min-width: 140px;
  height: auto;
}
body.mini-navbar .navbar-default .nav > li > .nav-second-level li a {
  font-size: 12px;
  border-radius: 3px;
}
.fixed-nav .slimScrollDiv #side-menu {
  padding-bottom: 60px;
}


body.mini-navbar .navbar-default .nav > li > a{
  display:none;
}
.mini-navbar .nav-second-level li a {
 display:none;
}
.mini-navbar .nav-second-level li a {
  padding: 10px 10px 10px 15px;
}
.mini-navbar .nav-second-level {
  position: absolute;
  left: 70px;
  top: 0;
  background-color: #2f4050;
  padding: 10px 10px 10px 10px;
  font-size: 12px;
}
.canvas-menu.mini-navbar .nav-second-level {
  background: #293846;
}
.mini-navbar li.active .nav-second-level {
  left: 65px;
}
.navbar-default .special_link a {
  background: #1ab394;
  color: white;
}
.navbar-default .special_link a:hover {
  background: #17987e !important;
  color: white;
}
.navbar-default .special_link a span.label {
  background: #fff;
  color: #1ab394;
}
.navbar-default .landing_link a {
  background: #1cc09f;
  color: white;
}
.navbar-default .landing_link a:hover {
  background: #1ab394 !important;
  color: white;
}
.navbar-default .landing_link a span.label {
  background: #fff;
  color: #1cc09f;
}
.logo-element {
  text-align: center;
  font-size: 18px;
  font-weight: 600;
  color: white;
  display: none;
  padding: 18px 0;
}
.pace-done .navbar-static-side,
.pace-done .nav-header,
.pace-done li.active,
.pace-done #content-wrapper,
.pace-done .footer {
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
.navbar-fixed-top {
  background: #fff;
  transition-duration: 0.4s;
  border-bottom: 1px solid #e7eaec !important;
  z-index: 2030;
}
.navbar-fixed-top,
.navbar-static-top {
  background: #fff;
}
.fixed-nav #wrapper {
  margin-top: 0;
}
body.fixed-nav #wrapper .navbar-static-side,
body.fixed-nav #wrapper #content-wrapper {
  margin-top: 60px;
}
body.top-navigation.fixed-nav #wrapper #content-wrapper {
  margin-top: 0;
}
body.fixed-nav.fixed-nav-basic .navbar-fixed-top {
  left: 220px;
}
body.fixed-nav.fixed-nav-basic.mini-navbar .navbar-fixed-top {
  left: 70px;
}
body.fixed-nav.fixed-nav-basic.fixed-sidebar.mini-navbar .navbar-fixed-top {
  left: 0;
}
body.fixed-nav.fixed-nav-basic #wrapper .navbar-static-side {
  margin-top: 0;
}
body.fixed-nav.fixed-nav-basic.body-small .navbar-fixed-top {
  left: 0;
}
body.fixed-nav.fixed-nav-basic.fixed-sidebar.mini-navbar.body-small .navbar-fixed-top {
  left: 220px;
}
.fixed-nav .minimalize-styl-2 {
  margin: 14px 5px 5px 15px;
}
.body-small .navbar-fixed-top {
  margin-left: 0;
}
body.mini-navbar .navbar-static-side {
  width: 0px;
}
body.mini-navbar .profile-element,
body.mini-navbar .nav-label,
body.mini-navbar .navbar-default .nav li a span {
  display: none;
}

body.mini-navbar .navbar-default .nav li a i {
  display: none;
}

body.canvas-menu .profile-element {
  display: block;
}
body:not(.fixed-sidebar):not(.canvas-menu).mini-navbar .nav-second-level {
  display: none;
}
body.mini-navbar .navbar-default .nav > li > a {
  font-size: 16px;
}
body.mini-navbar .logo-element {
  display: block;
}
body.canvas-menu .logo-element {
  display: none;
}
body.mini-navbar .nav-header {
  padding: 0;
  background-color: #1ab394;
}
body.canvas-menu .nav-header {
  padding: 33px 25px;
}
body.mini-navbar #content-wrapper {
  margin: 50px 0 0 0;
}
body.fixed-sidebar.mini-navbar .footer,
body.canvas-menu.mini-navbar .footer {
  margin: 0 0 0 0 !important;
}
body.canvas-menu.mini-navbar #content-wrapper,
body.canvas-menu.mini-navbar .footer {
  margin: 0 0 0 0;
}
body.fixed-sidebar .navbar-static-side,
body.canvas-menu .navbar-static-side {
  position: fixed;
  width: 220px;
  z-index: 2001;
  height: 100%;
}
body.fixed-sidebar.mini-navbar .navbar-static-side {
  width: 0;
}
body.fixed-sidebar.mini-navbar #content-wrapper {
  margin: 0 0 0 0;
}
body.body-small.fixed-sidebar.mini-navbar #content-wrapper {
  margin: 0 0 0 220px;
}
body.body-small.fixed-sidebar.mini-navbar .navbar-static-side {
  width: 220px;
}
.fixed-sidebar.mini-navbar .nav li:focus > .nav-second-level,
.canvas-menu.mini-navbar .nav li:focus > .nav-second-level {
  display: block;
  height: auto;
}
body.fixed-sidebar.mini-navbar .navbar-default .nav > li > .nav-second-level li a {
  font-size: 12px;
  border-radius: 3px;
}
body.canvas-menu.mini-navbar .navbar-default .nav > li > .nav-second-level li a {
  font-size: 13px;
  border-radius: 3px;
}
.fixed-sidebar.mini-navbar .nav-second-level li a,
.canvas-menu.mini-navbar .nav-second-level li a {
  padding: 10px 10px 10px 15px;
}
.fixed-sidebar.mini-navbar .nav-second-level,
.canvas-menu.mini-navbar .nav-second-level {
  position: relative;
  padding: 0;
  font-size: 13px;
}
.fixed-sidebar.mini-navbar li.active .nav-second-level,
.canvas-menu.mini-navbar li.active .nav-second-level {
  left: 0;
}
body.fixed-sidebar.mini-navbar .navbar-default .nav > li > a,
body.canvas-menu.mini-navbar .navbar-default .nav > li > a {
  font-size: 13px;
}
body.fixed-sidebar.mini-navbar .nav-label,
body.fixed-sidebar.mini-navbar .navbar-default .nav li a span,
body.canvas-menu.mini-navbar .nav-label,
body.canvas-menu.mini-navbar .navbar-default .nav li a span {
  display: inline;
}
body.canvas-menu.mini-navbar .navbar-default .nav li .profile-element a span {
  display: block;
}
.canvas-menu.mini-navbar .nav-second-level li a,
.fixed-sidebar.mini-navbar .nav-second-level li a {
  padding: 7px 10px 7px 52px;
}
.fixed-sidebar.mini-navbar .nav-second-level,
.canvas-menu.mini-navbar .nav-second-level {
  left: 0;
}
body.canvas-menu nav.navbar-static-side {
  z-index: 2001;
  background: #2f4050;
  height: 100%;
  position: fixed;
  display: none;
}
body.canvas-menu.mini-navbar nav.navbar-static-side {
  display: block;
  width: 220px;
}
.top-navigation #content-wrapper {
  margin-left: 0;
}
.top-navigation .navbar-nav .dropdown-menu > .active > a {
  background: white;
  color: #1ab394;
  font-weight: bold;
}
.white-bg .navbar-fixed-top,
.white-bg .navbar-static-top {
  background: #fff;
}
.top-navigation .navbar {
  margin-bottom: 0;
}
.top-navigation .nav > li > a {
  padding: 15px 20px;
  color: #676a6c;
}
.top-navigation .nav > li a:hover,
.top-navigation .nav > li a:focus {
  background: #fff;
  color: #1ab394;
}
.top-navigation .nav > li.active {
  background: #fff;
  border: none;
}
.top-navigation .nav > li.active > a {
  color: #1ab394;
}
.top-navigation .navbar-right {
  margin-right: 10px;
}
.top-navigation .navbar-nav .dropdown-menu {
  box-shadow: none;
  border: 1px solid #e7eaec;
}
.top-navigation .dropdown-menu > li > a {
  margin: 0;
  padding: 7px 20px;
}
.navbar .dropdown-menu {
    margin-top: -1px;
    margin-left: 10px;
}
.top-navigation .navbar-brand {
  background: #1ab394;
  color: #fff;
  padding: 15px 25px;
}
.top-navigation .navbar-top-links li:last-child {
  margin-right: 0;
}
.top-navigation.mini-navbar #content-wrapper,
.top-navigation.body-small.fixed-sidebar.mini-navbar #content-wrapper,
.mini-navbar .top-navigation #content-wrapper,
.body-small.fixed-sidebar.mini-navbar .top-navigation #content-wrapper,
.canvas-menu #content-wrapper {
  margin: 0;
}
.top-navigation.fixed-nav #wrapper,
.fixed-nav #wrapper.top-navigation {
  margin-top: 50px;
}
.top-navigation .footer.fixed {
  margin-left: 0 !important;
}
.top-navigation .wrapper.wrapper-content {
  padding: 40px;
}
.top-navigation.body-small .wrapper.wrapper-content,
.body-small .top-navigation .wrapper.wrapper-content {
  padding: 40px 0 40px 0;
}
.right-links{
  position: absolute;
    right:17px;
    top: 15px;
}
.navbar-toggle {
  background-color: #1ab394;
  color: #fff;
  padding: 6px 12px;
  font-size: 14px;
}
.top-navigation .navbar-nav .open .dropdown-menu > li > a,
.top-navigation .navbar-nav .open .dropdown-menu .dropdown-header {
  padding: 10px 15px 10px 20px;
}

.menu-visible-lg,
.menu-visible-md {
  display: none !important;
}
.btn {
  border-radius: 0;
  border: none;
  padding: 8px 20px;
  box-shadow: none !important;
  transition: 0.5s;
}
.float-e-margins .btn {
  margin-bottom: 5px;
}
.btn-w-m {
  min-width: 120px;
}
.btn-primary.btn-outline {
  color: #1ab394;
}
.btn-success.btn-outline {
  color: #1c84c6;
}
.btn-info.btn-outline {
  color: #23c6c8;
}
.btn-warning.btn-outline {
  color: #f8ac59;
}
.btn-danger.btn-outline {
  color: #ed5565;
}
.btn-primary.btn-outline:hover,
.btn-success.btn-outline:hover,
.btn-info.btn-outline:hover,
.btn-warning.btn-outline:hover,
.btn-danger.btn-outline:hover {
  color: #fff;
}
.btn-primary {
  background-color: #bcd645 !important;
  border-color: #bcd645 !important;
  color: #676767;
  font-family: 'Lato-Regular';
  text-transform: uppercase;
}
.btn-primary i.fa{
  margin: 0 5px 0 0;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary,
.btn-primary:active:focus,
.btn-primary:active:hover,
.btn-primary.active:hover,
.btn-primary.active:focus {
  background-color: #b4cd43;
  border-color: #b4cd43;
  color: #676767;
}
.btn-success {
  background-color: #1c84c6;
  border-color: #1c84c6;
  color: #fff;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success,
.btn-success:active:focus,
.btn-success:active:hover,
.btn-success.active:hover,
.btn-success.active:focus {
  background-color: #1a7bb9;
  border-color: #1a7bb9;
  color: #fff;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success.disabled:hover,
.btn-success.disabled:focus,
.btn-success.disabled:active,
.btn-success.disabled.active,
.btn-success[disabled],
.btn-success[disabled]:hover,
.btn-success[disabled]:focus,
.btn-success[disabled]:active,
.btn-success.active[disabled],
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
  background-color: #1f90d8;
  border-color: #1f90d8;
}
.btn-icon{
  line-height: 38px;
  padding: 0;
  background: transparent;
  color: #f17336;
  font-size: 22px;
}
.btn-icon:hover{
  color: #80c142;
  background: transparent;
}
.btn-info {
  background-color: #23c6c8;
  border-color: #23c6c8;
  color: #fff;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info,
.btn-info:active:focus,
.btn-info:active:hover,
.btn-info.active:hover,
.btn-info.active:focus {
  background-color: #21b9bb;
  border-color: #21b9bb;
  color: #fff;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info.disabled:hover,
.btn-info.disabled:focus,
.btn-info.disabled:active,
.btn-info.disabled.active,
.btn-info[disabled],
.btn-info[disabled]:hover,
.btn-info[disabled]:focus,
.btn-info[disabled]:active,
.btn-info.active[disabled],
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
  background-color: #26d7d9;
  border-color: #26d7d9;
}
.btn-default {
  background: #ebebea;
  font-family: 'Lato-Regular';
  text-transform: uppercase;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default,
.btn-default:active:focus,
.btn-default:active:hover,
.btn-default.active:hover,
.btn-default.active:focus {
  background: #bdd646;
}
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  
}
.btn-default.disabled,
.btn-default.disabled:hover,
.btn-default.disabled:focus,
.btn-default.disabled:active,
.btn-default.disabled.active,
.btn-default[disabled],
.btn-default[disabled]:hover,
.btn-default[disabled]:focus,
.btn-default[disabled]:active,
.btn-default.active[disabled],
fieldset[disabled] .btn-default,
fieldset[disabled] .btn-default:hover,
fieldset[disabled] .btn-default:focus,
fieldset[disabled] .btn-default:active,
fieldset[disabled] .btn-default.active {
  color: #cacaca;
}
.btn-warning {
  background-color: #f17336;
  border-color: #f17336;
  color: #fff;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning,
.btn-warning:active:focus,
.btn-warning:active:hover,
.btn-warning.active:hover,
.btn-warning.active:focus {
  background-color: #e87036;
  border-color: #e87036;
  color: #fff;
}
.btn-danger {
  background-color: #ed5565;
  border-color: #ed5565;
  color: #fff;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger,
.btn-danger:active:focus,
.btn-danger:active:hover,
.btn-danger.active:hover,
.btn-danger.active:focus {
  background-color: #ec4758;
  border-color: #ec4758;
  color: #fff;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger.disabled:hover,
.btn-danger.disabled:focus,
.btn-danger.disabled:active,
.btn-danger.disabled.active,
.btn-danger[disabled],
.btn-danger[disabled]:hover,
.btn-danger[disabled]:focus,
.btn-danger[disabled]:active,
.btn-danger.active[disabled],
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
  background-color: #ef6776;
  border-color: #ef6776;
}
.btn-link {
  color: inherit;
}
.btn-link:hover,
.btn-link:focus,
.btn-link:active,
.btn-link.active,
.open .dropdown-toggle.btn-link {
  color: #1ab394;
  text-decoration: none;
}
.btn-link:active,
.btn-link.active,
.open .dropdown-toggle.btn-link {
  background-image: none;
}
.btn-link.disabled,
.btn-link.disabled:hover,
.btn-link.disabled:focus,
.btn-link.disabled:active,
.btn-link.disabled.active,
.btn-link[disabled],
.btn-link[disabled]:hover,
.btn-link[disabled]:focus,
.btn-link[disabled]:active,
.btn-link.active[disabled],
fieldset[disabled] .btn-link,
fieldset[disabled] .btn-link:hover,
fieldset[disabled] .btn-link:focus,
fieldset[disabled] .btn-link:active,
fieldset[disabled] .btn-link.active {
  color: #cacaca;
}
.btn-white {
  color: inherit;
  background: white;
  border: 1px solid #e7eaec;
}
.btn-white:hover,
.btn-white:focus,
.btn-white:active,
.btn-white.active,
.open .dropdown-toggle.btn-white,
.btn-white:active:focus,
.btn-white:active:hover,
.btn-white.active:hover,
.btn-white.active:focus {
  color: inherit;
  border: 1px solid #d2d2d2;
}
.btn-white:active,
.btn-white.active {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15) inset;
}
.btn-white:active,
.btn-white.active,
.open .dropdown-toggle.btn-white {
  background-image: none;
}
.btn-white.disabled,
.btn-white.disabled:hover,
.btn-white.disabled:focus,
.btn-white.disabled:active,
.btn-white.disabled.active,
.btn-white[disabled],
.btn-white[disabled]:hover,
.btn-white[disabled]:focus,
.btn-white[disabled]:active,
.btn-white.active[disabled],
fieldset[disabled] .btn-white,
fieldset[disabled] .btn-white:hover,
fieldset[disabled] .btn-white:focus,
fieldset[disabled] .btn-white:active,
fieldset[disabled] .btn-white.active {
  color: #cacaca;
}
.form-control,
.form-control:focus,
.has-error .form-control:focus,
.has-success .form-control:focus,
.has-warning .form-control:focus,
.navbar-collapse,
.navbar-form,
.navbar-form-custom .form-control:focus,
.navbar-form-custom .form-control:hover,
.open .btn.dropdown-toggle,
.panel,
.popover,
.progress,
.progress-bar {
  box-shadow: none;
}
.btn-outline {
  color: inherit;
  background-color: transparent;
  transition: all .5s;
}
.btn-rounded {
  border-radius: 50px;
}
.btn-large-dim {
  width: 90px;
  height: 90px;
  font-size: 42px;
}
button.dim {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  padding-top: 6px;
  margin-right: 10px;
  position: relative;
  cursor: pointer;
  border-radius: 5px;
  font-weight: 600;
  margin-bottom: 20px !important;
}
button.dim:active {
  top: 3px;
}
button.btn-primary.dim {
  box-shadow: inset 0 0 0 #16987e, 0 5px 0 0 #16987e, 0 10px 5px #999;
}
button.btn-primary.dim:active {
  box-shadow: inset 0 0 0 #16987e, 0 2px 0 0 #16987e, 0 5px 3px #999;
}
button.btn-default.dim {
  box-shadow: inset 0 0 0 #b3b3b3, 0 5px 0 0 #b3b3b3, 0 10px 5px #999;
}
button.btn-default.dim:active {
  box-shadow: inset 0 0 0 #b3b3b3, 0 2px 0 0 #b3b3b3, 0 5px 3px #999;
}
button.btn-warning.dim {
  box-shadow: inset 0 0 0 #f79d3c, 0 5px 0 0 #f79d3c, 0 10px 5px #999;
}
button.btn-warning.dim:active {
  box-shadow: inset 0 0 0 #f79d3c, 0 2px 0 0 #f79d3c, 0 5px 3px #999;
}
button.btn-info.dim {
  box-shadow: inset 0 0 0 #1eacae, 0 5px 0 0 #1eacae, 0 10px 5px #999;
}
button.btn-info.dim:active {
  box-shadow: inset 0 0 0 #1eacae, 0 2px 0 0 #1eacae, 0 5px 3px #999;
}
button.btn-success.dim {
  box-shadow: inset 0 0 0 #1872ab, 0 5px 0 0 #1872ab, 0 10px 5px #999;
}
button.btn-success.dim:active {
  box-shadow: inset 0 0 0 #1872ab, 0 2px 0 0 #1872ab, 0 5px 3px #999;
}
button.btn-danger.dim {
  box-shadow: inset 0 0 0 #ea394c, 0 5px 0 0 #ea394c, 0 10px 5px #999;
}
button.btn-danger.dim:active {
  box-shadow: inset 0 0 0 #ea394c, 0 2px 0 0 #ea394c, 0 5px 3px #999;
}
button.dim:before {
  font-size: 50px;
  line-height: 1em;
  font-weight: normal;
  color: #fff;
  display: block;
  padding-top: 10px;
}
button.dim:active:before {
  top: 7px;
  font-size: 50px;
}
.btn:focus {
  outline: none !important;
}
.label {
  background-color: #d1dade;
  color: #5e5e5e;
  font-family: 'Open Sans';
  font-size: 10px;
  font-weight: 600;
  padding: 3px 8px;
  text-shadow: none;
}
.badge {
  background-color: #d1dade;
  color: #5e5e5e;
  font-family: 'Open Sans';
  font-size: 11px;
  font-weight: 600;
  padding-bottom: 4px;
  padding-left: 6px;
  padding-right: 6px;
  text-shadow: none;
}
.label-primary,
.badge-primary {
  background-color: #1ab394;
  color: #fff;
}
.label-success,
.badge-success {
  background-color: #1c84c6;
  color: #fff;
}
.label-warning,
.badge-warning {
  background-color: #f8ac59;
  color: #fff;
}
.label-warning-light,
.badge-warning-light {
  background-color: #f8ac59;
  color: #ffffff;
}
.label-danger,
.badge-danger {
  background-color: #ed5565;
  color: #fff;
}
.label-info,
.badge-info {
  background-color: #23c6c8;
  color: #fff;
}
.label-inverse,
.badge-inverse {
  background-color: #262626;
  color: #fff;
}
.label-white,
.badge-white {
  background-color: #fff;
  color: #5E5E5E;
}
.label-white,
.badge-disable {
  background-color: #2A2E36;
  color: #8B91A0;
}
/* TOOGLE SWICH */
.onoffswitch {
  position: relative;
  width: 64px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
.onoffswitch-checkbox {
  display: none;
}
.onoffswitch-label {
  display: block;
  overflow: hidden;
  cursor: pointer;
  border: 2px solid #1ab394;
  border-radius: 2px;
}
.onoffswitch-inner {
  width: 200%;
  margin-left: -100%;
  -moz-transition: margin 0.3s ease-in 0s;
  -webkit-transition: margin 0.3s ease-in 0s;
  -o-transition: margin 0.3s ease-in 0s;
  transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before,
.onoffswitch-inner:after {
  float: left;
  width: 50%;
  height: 20px;
  padding: 0;
  line-height: 20px;
  font-size: 12px;
  color: white;
  font-family: Trebuchet, Arial, sans-serif;
  font-weight: bold;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.onoffswitch-inner:before {
  content: "ON";
  padding-left: 10px;
  background-color: #1ab394;
  color: #fff;
}
.onoffswitch-inner:after {
  content: "OFF";
  padding-right: 10px;
  background-color: #fff;
  color: #999;
  text-align: right;
}
.onoffswitch-switch {
  width: 20px;
  margin: 0;
  background: #fff;
  border: 2px solid #1ab394;
  border-radius: 2px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 44px;
  -moz-transition: all 0.3s ease-in 0s;
  -webkit-transition: all 0.3s ease-in 0s;
  -o-transition: all 0.3s ease-in 0s;
  transition: all 0.3s ease-in 0s;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0;
}
/* CHOSEN PLUGIN */
.chosen-container-single .chosen-single {
  background: #ffffff;
  box-shadow: none;
  -moz-box-sizing: border-box;
  background-color: #fff;
  border: 1px solid #CBD5DD;
  border-radius: 2px;
  cursor: text;
  height: auto !important;
  margin: 0;
  min-height: 30px;
  overflow: hidden;
  padding: 4px 12px;
  position: relative;
  width: 100%;
}
.chosen-container-multi .chosen-choices li.search-choice {
  background: #f1f1f1;
  border: 1px solid #ededed;
  border-radius: 2px;
  box-shadow: none;
  color: #333;
  cursor: default;
  line-height: 13px;
  margin: 3px 0 3px 5px;
  padding: 3px 20px 3px 5px;
  position: relative;
}
/* PAGINATIN */
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: #f4f4f4;
  border-color: #DDDDDD;
  color: inherit;
  cursor: default;
  z-index: 2;
}
.pagination > li > a,
.pagination > li > span {
  background-color: #fff;
  border: 1px solid #DDDDDD;
  color: inherit;
  float: left;
  line-height: 1.42857;
  margin-left: -1px;
  padding: 4px 10px;
  position: relative;
  text-decoration: none;
}
/* TOOLTIPS */

.tooltip-inner {
  background-color: #2F4050;
}
.tooltip.top .tooltip-arrow {
  border-top-color: #2F4050;
}
.tooltip.right .tooltip-arrow {
  border-right-color: #2F4050;
}
.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #2F4050;
}
.tooltip.left .tooltip-arrow {
  border-left-color: #2F4050;
}
/* EASY PIE CHART*/
.easypiechart {
  position: relative;
  text-align: center;
}
.easypiechart .h2 {
  margin-left: 10px;
  margin-top: 10px;
  display: inline-block;
}
.easypiechart canvas {
  top: 0;
  left: 0;
}
.easypiechart .easypie-text {
  line-height: 1;
  position: absolute;
  top: 33px;
  width: 100%;
  z-index: 1;
}
.easypiechart img {
  margin-top: -4px;
}
.jqstooltip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
/* FULLCALENDAR */
.fc-state-default {
  background-color: #ffffff;
  background-image: none;
  background-repeat: repeat-x;
  box-shadow: none;
  color: #333;
  text-shadow: none;
}
.fc-state-default {
  border: 1px solid;
}
.fc-button {
  color: inherit;
  border: 1px solid #e7eaec;
  cursor: pointer;
  display: inline-block;
  height: 1.9em;
  line-height: 1.9em;
  overflow: hidden;
  padding: 0 0.6em;
  position: relative;
  white-space: nowrap;
}
.fc-state-active {
  background-color: #1ab394;
  border-color: #1ab394;
  color: #ffffff;
}
.fc-header-title h2 {
  font-size: 16px;
  font-weight: 600;
  color: inherit;
}
.fc-content .fc-widget-header,
.fc-content .fc-widget-content {
  border-color: #e7eaec;
  font-weight: normal;
}
.fc-border-separate tbody {
  background-color: #F8F8F8;
}
.fc-state-highlight {
  background: none repeat scroll 0 0 #FCF8E3;
}
.external-event {
  padding: 5px 10px;
  border-radius: 2px;
  cursor: pointer;
  margin-bottom: 5px;
}
.fc-ltr .fc-event-hori.fc-event-end,
.fc-rtl .fc-event-hori.fc-event-start {
  border-radius: 2px;
}
.fc-event,
.fc-agenda .fc-event-time,
.fc-event a {
  padding: 4px 6px;
  background-color: #1ab394;
  /* background color */
  border-color: #1ab394;
  /* border color */
}
.fc-event-time,
.fc-event-title {
  color: #717171;
  padding: 0 1px;
}
.ui-calendar .fc-event-time,
.ui-calendar .fc-event-title {
  color: #fff;
}
/* Chat */
.chat-activity-list .chat-element {
  border-bottom: 1px solid #e7eaec;
}
.chat-element:first-child {
  margin-top: 0;
}
.chat-element {
  padding-bottom: 15px;
}
.chat-element,
.chat-element .media {
  margin-top: 15px;
}
.chat-element,
.media-body {
  overflow: hidden;
}
.media-body {
  display: block;
  width: auto;
}
.chat-element > .pull-left {
  margin-right: 10px;
}
.chat-element img.img-circle,
.dropdown-messages-box img.img-circle {
  width: 38px;
  height: 38px;
}
.chat-element .well {
  border: 1px solid #e7eaec;
  box-shadow: none;
  margin-top: 10px;
  margin-bottom: 5px;
  padding: 10px 20px;
  font-size: 11px;
  line-height: 16px;
}
.chat-element .actions {
  margin-top: 10px;
}
.chat-element .photos {
  margin: 10px 0;
}
.right.chat-element > .pull-right {
  margin-left: 10px;
}
.chat-photo {
  max-height: 180px;
  border-radius: 4px;
  overflow: hidden;
  margin-right: 10px;
  margin-bottom: 10px;
}
.chat {
  margin: 0;
  padding: 0;
  list-style: none;
}
.chat li {
  margin-bottom: 10px;
  padding-bottom: 5px;
  border-bottom: 1px dotted #B3A9A9;
}
.chat li.left .chat-body {
  margin-left: 60px;
}
.chat li.right .chat-body {
  margin-right: 60px;
}
.chat li .chat-body p {
  margin: 0;
  color: #777777;
}
.panel .slidedown .glyphicon,
.chat .glyphicon {
  margin-right: 5px;
}
.chat-panel .panel-body {
  height: 350px;
  overflow-y: scroll;
}
/* LIST GROUP */
a.list-group-item.active,
a.list-group-item.active:hover,
a.list-group-item.active:focus {
  background-color: #1ab394;
  border-color: #1ab394;
  color: #fff;
  z-index: 2;
}
.list-group-item-heading {
  margin-top: 10px;
}
.list-group-item-text {
  margin: 0 0 10px;
  color: inherit;
  font-size: 12px;
  line-height: inherit;
}
.no-padding-left {
    padding-left: 0 !important;
}
.no-padding .list-group-item {
  border-left: none;
  border-right: none;
  border-bottom: none;
}
.no-padding .list-group-item:first-child {
  border-left: none;
  border-right: none;
  border-bottom: none;
  border-top: none;
}
.no-padding .list-group {
  margin-bottom: 0;
}
.list-group-item {
  background-color: inherit;
  border: 1px solid #e7eaec;
  display: block;
  margin-bottom: -1px;
  padding: 10px 15px;
  position: relative;
}
.elements-list .list-group-item {
  border-left: none;
  border-right: none;
  padding: 15px 25px;
}
.elements-list .list-group-item:first-child {
  border-left: none;
  border-right: none;
  border-top: none !important;
}
.elements-list .list-group {
  margin-bottom: 0;
}
.elements-list a {
  color: inherit;
}
.elements-list .list-group-item.active,
.elements-list .list-group-item:hover {
  background: #f3f3f4;
  color: inherit;
  border-color: #e7eaec;
  /*border-bottom: 1px solid #e7eaec;*/
  /*border-top: 1px solid #e7eaec;*/
  border-radius: 0;
}
.elements-list li.active {
  transition: none;
}
.element-detail-box {
  padding: 25px;
}
/* FLOT CHART  */
.flot-chart {
  display: block;
  height: 200px;
}
.widget .flot-chart.dashboard-chart {
  display: block;
  height: 120px;
  margin-top: 40px;
}
.flot-chart.dashboard-chart {
  display: block;
  height: 180px;
  margin-top: 40px;
}
.flot-chart-content {
  width: 100%;
  height: 100%;
}
.flot-chart-pie-content {
  width: 200px;
  height: 200px;
  margin: auto;
}
.jqstooltip {
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  visibility: hidden;
  background: #2b303a;
  background-color: rgba(43, 48, 58, 0.8);
  color: white;
  text-align: left;
  white-space: nowrap;
  z-index: 10000;
  padding: 5px 5px 5px 5px;
  min-height: 22px;
  border-radius: 3px;
}
.jqsfield {
  color: white;
  text-align: left;
}
.fh-150 {
  height: 150px;
}
.fh-200 {
  height: 200px;
}
.h-150 {
  min-height: 150px;
}
.h-200 {
  min-height: 200px;
}
.legendLabel {
  padding-left: 5px;
}
.stat-list li:first-child {
  margin-top: 0;
}
.stat-list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.stat-percent {
  float: right;
}
.stat-list li {
  margin-top: 15px;
  position: relative;
}
/* DATATABLES */
table.dataTable thead .sorting,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
  background: transparent;
}
.dataTables_wrapper {
  padding-bottom: 30px;
}
.dataTables_length {
  float: left;
}
.dataTables_filter label {
  margin-right: 5px;
}
div.dataTables_wrapper div.dataTables_length label{
  font-family: 'Lato-Regular' !important;
}
select.form-control.input-sm {
    padding: 0;
    width: auto !important;
    font-size: 12px;
}
.html5buttons {
  float: right;
}
.html5buttons a {
  border: 1px solid #e7eaec;
  background: #fff;
  color: #676a6c;
  box-shadow: none;
  padding: 6px 8px;
  font-size: 12px;
}
.html5buttons a:hover,
.html5buttons a:focus:active {
  background-color: #eee;
  color: inherit;
  border-color: #d2d2d2;
}
div.dt-button-info {
  z-index: 100;
}
/* CIRCLE */
.img-circle {
  border-radius: 50%;
}
.btn-circle {
  width: 30px;
  height: 30px;
  padding: 6px 0;
  border-radius: 15px;
  text-align: center;
  font-size: 12px;
  line-height: 1.428571429;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  border-radius: 25px;
  font-size: 18px;
  line-height: 1.33;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  border-radius: 35px;
  font-size: 24px;
  line-height: 1.33;
}
.show-grid [class^="col-"] {
  padding-top: 10px;
  padding-bottom: 10px;
  border: 1px solid #ddd;
  background-color: #eee !important;
}
.show-grid {
  margin: 15px 0;
}
/* ANIMATION */
.css-animation-box h1 {
  font-size: 44px;
}
.animation-efect-links a {
  padding: 4px 6px;
  font-size: 12px;
}
#animation_box {
  background-color: #f9f8f8;
  border-radius: 16px;
  width: 80%;
  margin: 0 auto;
  padding-top: 80px;
}
.animation-text-box {
  position: absolute;
  margin-top: 40px;
  left: 50%;
  margin-left: -100px;
  width: 200px;
}
.animation-text-info {
  position: absolute;
  margin-top: -60px;
  left: 50%;
  margin-left: -100px;
  width: 200px;
  font-size: 10px;
}
.animation-text-box h2 {
  font-size: 54px;
  font-weight: 600;
  margin-bottom: 5px;
}
.animation-text-box p {
  font-size: 12px;
  text-transform: uppercase;
}
/* PEACE */
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.pace-inactive {
  display: none;
}
.pace .pace-progress {
  background: rgba(0,0,0,0.1);
  position: fixed;
  z-index: 2040;
  top: 0;
  right: 100%;
  width: 100%;
  height: 3px;
}
.pace-inactive {
  display: none;
}
/* WIDGETS */
.widget {
  border-radius: 5px;
  padding: 15px 20px;
  margin-bottom: 10px;
  margin-top: 10px;
}
.widget.style1 h2 {
  font-size: 30px;
}
.widget h2,
.widget h3 {
  margin-top: 5px;
  margin-bottom: 0;
}
.widget-text-box {
  padding: 20px;
  border: 1px solid #e7eaec;
  background: #ffffff;
}
.widget-head-color-box {
  border-radius: 5px 5px 0 0;
  margin-top: 10px;
}
.widget .flot-chart {
  height: 100px;
}
.vertical-align div {
  display: inline-block;
  vertical-align: middle;
}
.vertical-align h2,
.vertical-align h3 {
  margin: 0;
}
.todo-list {
  list-style: none outside none;
  margin: 0;
  padding: 0;
  font-size: 14px;
}
.todo-list.small-list {
  font-size: 12px;
}
.todo-list.small-list > li {
  background: #f3f3f4;
  border-left: none;
  border-right: none;
  border-radius: 4px;
  color: inherit;
  margin-bottom: 2px;
  padding: 6px 6px 6px 12px;
}
.todo-list.small-list .btn-xs,
.todo-list.small-list .btn-group-xs > .btn {
  border-radius: 5px;
  font-size: 10px;
  line-height: 1.5;
  padding: 1px 2px 1px 5px;
}
.todo-list > li {
  background: #f3f3f4;
  border-left: 6px solid #e7eaec;
  border-right: 6px solid #e7eaec;
  border-radius: 4px;
  color: inherit;
  margin-bottom: 2px;
  padding: 10px;
}
.todo-list .handle {
  cursor: move;
  display: inline-block;
  font-size: 16px;
  margin: 0 5px;
}
.todo-list > li .label {
  font-size: 9px;
  margin-left: 10px;
}
.check-link {
  font-size: 16px;
}
.todo-completed {
  text-decoration: line-through;
}
.geo-statistic h1 {
  font-size: 36px;
  margin-bottom: 0;
}
.glyphicon.fa {
  font-family: "FontAwesome";
}
/* INPUTS */
.inline {
  display: inline-block !important;
}
.input-s-sm {
  width: 120px;
}
.input-s {
  width: 200px;
}
.input-s-lg {
  width: 250px;
}
.i-checks {
  padding-left: 0;
}
.form-control,
.single-line {
  background-color: #fff;
  background-image: none;
  border: 1px solid #e5e6e7;
  border-radius: 1px;
  color: inherit;
  display: block;
  padding: 6px 12px;
  transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
  width: 100%;
  font-size: 14px;
}
.form-control:focus,
.single-line:focus {
  border-color: #c5bebe !important;
}
.has-success .form-control {
  border-color: #1ab394;
}
.has-warning .form-control {
  border-color: #f8ac59;
}
.has-error .form-control {
  border-color: #ed5565;
}
.has-success .control-label {
  color: #1ab394;
}
.has-warning .control-label {
  color: #f8ac59;
}
.has-error .control-label {
  color: #ed5565;
}
.input-group-addon {
  background-color: #fff;
  border: 1px solid #E5E6E7;
  border-radius: 1px;
  color: inherit;
  font-size: 14px;
  font-weight: 400;
  line-height: 1;
  padding: 6px 12px;
  text-align: center;
}
.spinner-buttons.input-group-btn .btn-xs {
  line-height: 1.13;
}
.spinner-buttons.input-group-btn {
  width: 20%;
}
.noUi-connect {
  background: none repeat scroll 0 0 #1ab394;
  box-shadow: none;
}
.slider_red .noUi-connect {
  background: none repeat scroll 0 0 #ed5565;
  box-shadow: none;
}
/* UI Sortable */
.ui-sortable .ibox-title {
  cursor: move;
}
.ui-sortable-placeholder {
  border: 1px dashed #cecece !important;
  visibility: visible !important;
  background: #e7eaec;
}
.ibox.ui-sortable-placeholder {
  margin: 0 0 23px !important;
}
/* SWITCHES */
.onoffswitch {
  position: relative;
  width: 54px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
.onoffswitch-checkbox {
  display: none;
}
.onoffswitch-label {
  display: block;
  overflow: hidden;
  cursor: pointer;
  border: 2px solid #1AB394;
  border-radius: 3px;
}
.onoffswitch-inner {
  display: block;
  width: 200%;
  margin-left: -100%;
  -moz-transition: margin 0.3s ease-in 0s;
  -webkit-transition: margin 0.3s ease-in 0s;
  -o-transition: margin 0.3s ease-in 0s;
  transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before,
.onoffswitch-inner:after {
  display: block;
  float: left;
  width: 50%;
  height: 16px;
  padding: 0;
  line-height: 16px;
  font-size: 10px;
  color: white;
  font-family: Trebuchet, Arial, sans-serif;
  font-weight: bold;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.onoffswitch-inner:before {
  content: "ON";
  padding-left: 7px;
  background-color: #1AB394;
  color: #fff;
}
.onoffswitch-inner:after {
  content: "OFF";
  padding-right: 7px;
  background-color: #fff;
  color: #919191;
  text-align: right;
}
.onoffswitch-switch {
  display: block;
  width: 18px;
  margin: 0;
  background: #fff;
  border: 2px solid #1AB394;
  border-radius: 3px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 36px;
  -moz-transition: all 0.3s ease-in 0s;
  -webkit-transition: all 0.3s ease-in 0s;
  -o-transition: all 0.3s ease-in 0s;
  transition: all 0.3s ease-in 0s;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0;
}
/* jqGrid */
.ui-jqgrid {
  -moz-box-sizing: content-box;
}
.ui-jqgrid-btable {
  border-collapse: separate;
}
.ui-jqgrid-htable {
  border-collapse: separate;
}
.ui-jqgrid-titlebar {
  height: 40px;
  line-height: 15px;
  color: #676a6c;
  background-color: #F9F9F9;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.ui-jqgrid .ui-jqgrid-title {
  float: left;
  margin: 1.1em 1em 0.2em;
}
.ui-jqgrid .ui-jqgrid-titlebar {
  position: relative;
  border-left: 0 solid;
  border-right: 0 solid;
  border-top: 0 solid;
}
.ui-widget-header {
  background: none;
  background-image: none;
  background-color: #f5f5f6;
  text-transform: uppercase;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.ui-jqgrid tr.ui-row-ltr td {
  border-right-color: inherit;
  border-right-style: solid;
  border-right-width: 1px;
  text-align: left;
  border-color: #DDDDDD;
  background-color: inherit;
}
.ui-search-toolbar input[type="text"] {
  font-size: 12px;
  height: 15px;
  border: 1px solid #CCCCCC;
  border-radius: 0;
}
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
  background: #F9F9F9;
  border: 1px solid #DDDDDD;
  line-height: 15px;
  font-weight: bold;
  color: #676a6c;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.ui-widget-content {
  box-sizing: content-box;
}
.ui-icon-triangle-1-n {
  background-position: 1px -16px;
}
.ui-jqgrid tr.ui-search-toolbar th {
  border-top-width: 0 !important;
  border-top-color: inherit !important;
  border-top-style: ridge !important;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
  background: #f5f5f5;
  border-collapse: separate;
}
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
  background: #f2fbff;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
  border: 1px solid #dddddd;
  background: #ffffff;
  font-weight: normal;
  color: #212121;
}
.ui-jqgrid .ui-pg-input {
  font-size: inherit;
  width: 50px;
  border: 1px solid #CCCCCC;
  height: 15px;
}
.ui-jqgrid .ui-pg-selbox {
  display: block;
  font-size: 1em;
  height: 25px;
  line-height: 18px;
  margin: 0;
  width: auto;
}
.ui-jqgrid .ui-pager-control {
  position: relative;
}
.ui-jqgrid .ui-jqgrid-pager {
  height: 32px;
  position: relative;
}
.ui-pg-table .navtable .ui-corner-all {
  border-radius: 0;
}
.ui-jqgrid .ui-pg-button:hover {
  padding: 1px;
  border: 0;
}
.ui-jqgrid .loading {
  position: absolute;
  top: 45%;
  left: 45%;
  width: auto;
  height: auto;
  z-index: 101;
  padding: 6px;
  margin: 5px;
  text-align: center;
  font-weight: bold;
  display: none;
  border-width: 2px !important;
  font-size: 11px;
}
.ui-jqgrid .form-control {
  height: 10px;
  width: auto;
  display: inline;
  padding: 10px 12px;
}
.ui-jqgrid-pager {
  height: 32px;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
  border-top-left-radius: 0;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
  border-top-right-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
  border-bottom-left-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
  border-bottom-right-radius: 0;
}
.ui-widget-content {
  border: 1px solid #ddd;
}
.ui-jqgrid .ui-jqgrid-titlebar {
  padding: 0;
}
.ui-jqgrid .ui-jqgrid-titlebar {
  border-bottom: 1px solid #ddd;
}
.ui-jqgrid tr.jqgrow td {
  padding: 6px;
}
.ui-jqdialog .ui-jqdialog-titlebar {
  padding: 10px 10px;
}
.ui-jqdialog .ui-jqdialog-title {
  float: none !important;
}
.ui-jqdialog > .ui-resizable-se {
  position: absolute;
}
/* Nestable list */
.dd {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
  list-style: none;
  font-size: 13px;
  line-height: 20px;
}
.dd-list {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  list-style: none;
}
.dd-list .dd-list {
  padding-left: 30px;
}
.dd-collapsed .dd-list {
  display: none;
}
.dd-item,
.dd-empty,
.dd-placeholder {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  min-height: 20px;
  font-size: 13px;
  line-height: 20px;
}
.dd-handle {
  display: block;
  margin: 5px 0;
  padding: 5px 10px;
  color: #333;
  text-decoration: none;
  border: 1px solid #e7eaec;
  background: #f5f5f5;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.dd-handle span {
  font-weight: bold;
}
.dd-handle:hover {
  background: #f0f0f0;
  cursor: pointer;
  font-weight: bold;
}
.dd-item > button {
  display: block;
  position: relative;
  cursor: pointer;
  float: left;
  width: 25px;
  height: 20px;
  margin: 5px 0;
  padding: 0;
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  border: 0;
  background: transparent;
  font-size: 12px;
  line-height: 1;
  text-align: center;
  font-weight: bold;
}
.dd-item > button:before {
  content: '+';
  display: block;
  position: absolute;
  width: 100%;
  text-align: center;
  text-indent: 0;
}
.dd-item > button[data-action="collapse"]:before {
  content: '-';
}
#nestable2 .dd-item > button {
  font-family: FontAwesome;
  height: 34px;
  width: 33px;
  color: #c1c1c1;
}
#nestable2 .dd-item > button:before {
  content: "\f067";
}
#nestable2 .dd-item > button[data-action="collapse"]:before {
  content: "\f068";
}
.dd-placeholder,
.dd-empty {
  margin: 5px 0;
  padding: 0;
  min-height: 30px;
  background: #f2fbff;
  border: 1px dashed #b6bcbf;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.dd-empty {
  border: 1px dashed #bbb;
  min-height: 100px;
  background-color: #e5e5e5;
  background-image: -webkit-linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff), -webkit-linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff);
  background-image: -moz-linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff), -moz-linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff);
  background-image: linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff), linear-gradient(45deg, #ffffff 25%, transparent 25%, transparent 75%, #ffffff 75%, #ffffff);
  background-size: 60px 60px;
  background-position: 0 0, 30px 30px;
}
.dd-dragel {
  position: absolute;
  z-index: 9999;
  pointer-events: none;
}
.dd-dragel > .dd-item .dd-handle {
  margin-top: 0;
}
.dd-dragel .dd-handle {
  -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
}
/**
* Nestable Extras
*/
.nestable-lists {
  display: block;
  clear: both;
  padding: 30px 0;
  width: 100%;
  border: 0;
  border-top: 2px solid #ddd;
  border-bottom: 2px solid #ddd;
}
#nestable-menu {
  padding: 0;
  margin: 10px 0 20px 0;
}
#nestable-output,
#nestable2-output {
  width: 100%;
  font-size: 0.75em;
  line-height: 1.333333em;
  font-family: open sans, lucida grande, lucida sans unicode, helvetica, arial, sans-serif;
  padding: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
#nestable2 .dd-handle {
  color: inherit;
  border: 1px dashed #e7eaec;
  background: #f3f3f4;
  padding: 10px;
}
#nestable2 .dd-handle:hover {
  /*background: #bbb;*/
}
#nestable2 span.label {
  margin-right: 10px;
}
#nestable-output,
#nestable2-output {
  font-size: 12px;
  padding: 25px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
/* CodeMirror */
.CodeMirror {
  border: 1px solid #eee;
  height: auto;
}
.CodeMirror-scroll {
  overflow-y: hidden;
  overflow-x: auto;
}
/* Google Maps */
.google-map {
  height: 300px;
}
/* Validation */
label.error {
  color: #cc5965;
  display: inline-block;
  margin-left: 5px;
}
.form-control.error {
  border: 1px dotted #cc5965;
}
/* ngGrid */
.gridStyle {
  border: 1px solid #d4d4d4;
  width: 100%;
  height: 400px;
}
.gridStyle2 {
  border: 1px solid #d4d4d4;
  width: 500px;
  height: 300px;
}
.ngH eaderCell {
  border-right: none;
  border-bottom: 1px solid #e7eaec;
}
.ngCell {
  border-right: none;
}
.ngTopPanel {
  background: #F5F5F6;
}
.ngRow.even {
  background: #f9f9f9;
}
.ngRow.selected {
  background: #EBF2F1;
}
.ngRow {
  border-bottom: 1px solid #e7eaec;
}
.ngCell {
  background-color: transparent;
}
.ngHeaderCell {
  border-right: none;
}
/* Toastr custom style */
#toast-container > .toast {
  background-image: none !important;
}
#toast-container > .toast:before {
  position: fixed;
  font-family: FontAwesome;
  font-size: 24px;
  line-height: 24px;
  float: left;
  color: #FFF;
  padding-right: 0.5em;
  margin: auto 0.5em auto -1.5em;
}
#toast-container > .toast-warning:before {
  content: "\f0e7";
}
#toast-container > .toast-error:before {
  content: "\f071";
}
#toast-container > .toast-info:before {
  content: "\f005";
}
#toast-container > .toast-success:before {
  content: "\f00C";
}
#toast-container > div {
  -moz-box-shadow: 0 0 3px #999;
  -webkit-box-shadow: 0 0 3px #999;
  box-shadow: 0 0 3px #999;
  opacity: .9;
  -ms-filter: alpha(opacity=90);
  filter: alpha(opacity=90);
}
#toast-container > :hover {
  -moz-box-shadow: 0 0 4px #999;
  -webkit-box-shadow: 0 0 4px #999;
  box-shadow: 0 0 4px #999;
  opacity: 1;
  -ms-filter: alpha(opacity=100);
  filter: alpha(opacity=100);
  cursor: pointer;
}
.toast {
  background-color: #1ab394;
}
.toast-success {
  background-color: #1ab394;
}
.toast-error {
  background-color: #ed5565;
}
.toast-info {
  background-color: #23c6c8;
}
.toast-warning {
  background-color: #f8ac59;
}
.toast-top-full-width {
  margin-top: 20px;
}
.toast-bottom-full-width {
  margin-bottom: 20px;
}
/* Notifie */
.cg-notify-message.inspinia-notify {
  background: #fff;
  padding: 0;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.2);
  border: none;
  margin-top: 30px;
  color: inherit;
}
.inspinia-notify.alert-warning {
  border-left: 6px solid #f8ac59;
}
.inspinia-notify.alert-success {
  border-left: 6px solid #1c84c6;
}
.inspinia-notify.alert-danger {
  border-left: 6px solid #ed5565;
}
.inspinia-notify.alert-info {
  border-left: 6px solid #1ab394;
}
/* Image cropper style */
.img-container,
.img-preview {
  overflow: hidden;
  text-align: center;
  width: 100%;
}
.img-preview-sm {
  height: 130px;
  width: 200px;
}
/* Forum styles  */
.forum-post-container .media {
  margin: 10px 10px 10px 10px;
  padding: 20px 10px 20px 10px;
  border-bottom: 1px solid #f1f1f1;
}
.forum-avatar {
  float: left;
  margin-right: 20px;
  text-align: center;
  width: 110px;
}
.forum-avatar .img-circle {
  height: 48px;
  width: 48px;
}
.author-info {
  color: #676a6c;
  font-size: 11px;
  margin-top: 5px;
  text-align: center;
}
.forum-post-info {
  padding: 9px 12px 6px 12px;
  background: #f9f9f9;
  border: 1px solid #f1f1f1;
}
.media-body > .media {
  background: #f9f9f9;
  border-radius: 3px;
  border: 1px solid #f1f1f1;
}
.forum-post-container .media-body .photos {
  margin: 10px 0;
}
.forum-photo {
  max-width: 140px;
  border-radius: 3px;
}
.media-body > .media .forum-avatar {
  width: 70px;
  margin-right: 10px;
}
.media-body > .media .forum-avatar .img-circle {
  height: 38px;
  width: 38px;
}
.mid-icon {
  font-size: 66px;
}
.forum-item {
  margin: 10px 0;
  padding: 10px 0 20px;
  border-bottom: 1px solid #f1f1f1;
}
.views-number {
  font-size: 24px;
  line-height: 18px;
  font-weight: 400;
}
.forum-container,
.forum-post-container {
  padding: 30px !important;
}
.forum-item small {
  color: #999;
}
.forum-item .forum-sub-title {
  color: #999;
  margin-left: 50px;
}
.forum-title {
  margin: 15px 0 15px 0;
}
.forum-info {
  text-align: center;
}
.forum-desc {
  color: #999;
}
.forum-icon {
  float: left;
  width: 30px;
  margin-right: 20px;
  text-align: center;
}
a.forum-item-title {
  color: inherit;
  display: block;
  font-size: 18px;
  font-weight: 600;
}
a.forum-item-title:hover {
  color: inherit;
}
.forum-icon .fa {
  font-size: 30px;
  margin-top: 8px;
  color: #9b9b9b;
}
.forum-item.active .fa {
  color: #1ab394;
}
.forum-item.active a.forum-item-title {
  color: #1ab394;
}
/* New Timeline style */
.vertical-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.vertical-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}
#vertical-timeline {
  position: relative;
  padding: 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#vertical-timeline::before {
  content: '';
  position: absolute;
  top: 0;
  left: 18px;
  height: 100%;
  width: 4px;
  background: #f1f1f1;
}
.vertical-timeline-content .btn {
  float: right;
}
#vertical-timeline.light-timeline:before {
  background: #e7eaec;
}
.dark-timeline .vertical-timeline-content:before {
  border-color: transparent #f5f5f5 transparent transparent;
}
.dark-timeline.center-orientation .vertical-timeline-content:before {
  border-color: transparent transparent transparent #f5f5f5;
}
.dark-timeline .vertical-timeline-block:nth-child(2n) .vertical-timeline-content:before,
.dark-timeline.center-orientation .vertical-timeline-block:nth-child(2n) .vertical-timeline-content:before {
  border-color: transparent #f5f5f5 transparent transparent;
}
.dark-timeline .vertical-timeline-content,
.dark-timeline.center-orientation .vertical-timeline-content {
  background: #f5f5f5;
}

.vertical-timeline-block {
  position: relative;
  margin: 2em 0;
}
.vertical-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.vertical-timeline-block:first-child {
  margin-top: 0;
}
.vertical-timeline-block:last-child {
  margin-bottom: 0;
}

.vertical-timeline-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 16px;
  border: 3px solid #f1f1f1;
  text-align: center;
}
.vertical-timeline-icon i {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -9px;
}

.vertical-timeline-content {
  position: relative;
  margin-left: 60px;
  background: white;
  border-radius: 0.25em;
  padding: 1em;
}
.vertical-timeline-content:after {
  content: "";
  display: table;
  clear: both;
}
.vertical-timeline-content h2 {
  font-weight: 400;
  margin-top: 4px;
}
.vertical-timeline-content p {
  margin: 1em 0;
  line-height: 1.6;
}
.vertical-timeline-content .vertical-date {
  float: left;
  font-weight: 500;
}
.vertical-date small {
  color: #1ab394;
  font-weight: 400;
}
.vertical-timeline-content::before {
  content: '';
  position: absolute;
  top: 16px;
  right: 100%;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-right: 7px solid white;
}

/* Tabs */
.tabs-container .panel-body {
  background: #fff;
  border: 1px solid #e7eaec;
  border-radius: 2px;
  padding: 20px;
  position: relative;
}
.tabs-container .nav-tabs > li.active > a,
.tabs-container .nav-tabs > li.active > a:hover,
.tabs-container .nav-tabs > li.active > a:focus {
  border: 1px solid #e7eaec;
  border-bottom-color: transparent;
  background-color: #fff;
}
.tabs-container .nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.tabs-container .tab-pane .panel-body {
  border-top: none;
}
.tabs-container .nav-tabs > li.active > a,
.tabs-container .nav-tabs > li.active > a:hover,
.tabs-container .nav-tabs > li.active > a:focus {
  border: 1px solid #e7eaec;
  border-bottom-color: transparent;
}
.tabs-container .nav-tabs {
  border-bottom: 1px solid #e7eaec;
}
.tabs-container .tab-pane .panel-body {
  border-top: none;
}
.tabs-container .tabs-left .tab-pane .panel-body,
.tabs-container .tabs-right .tab-pane .panel-body {
  border-top: 1px solid #e7eaec;
}
.tabs-container .nav-tabs > li a:hover {
  background: transparent;
  border-color: transparent;
}
.tabs-container .tabs-below > .nav-tabs,
.tabs-container .tabs-right > .nav-tabs,
.tabs-container .tabs-left > .nav-tabs {
  border-bottom: 0;
}
.tabs-container .tabs-left .panel-body {
  position: static;
}
.tabs-container .tabs-left > .nav-tabs,
.tabs-container .tabs-right > .nav-tabs {
  width: 20%;
}
.tabs-container .tabs-left .panel-body {
  width: 80%;
  margin-left: 20%;
}
.tabs-container .tabs-right .panel-body {
  width: 80%;
  margin-right: 20%;
}
.tabs-container .tab-content > .tab-pane,
.tabs-container .pill-content > .pill-pane {
  display: none;
}
.tabs-container .tab-content > .active,
.tabs-container .pill-content > .active {
  display: block;
}
.tabs-container .tabs-below > .nav-tabs {
  border-top: 1px solid #e7eaec;
}
.tabs-container .tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}
.tabs-container .tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius: 0 0 4px 4px;
  border-radius: 0 0 4px 4px;
}
.tabs-container .tabs-below > .nav-tabs > li > a:hover,
.tabs-container .tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #e7eaec;
  border-bottom-color: transparent;
}
.tabs-container .tabs-left > .nav-tabs > li,
.tabs-container .tabs-right > .nav-tabs > li {
  float: none;
}
.tabs-container .tabs-left > .nav-tabs > li > a,
.tabs-container .tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}
.tabs-container .tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
}
.tabs-container .tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}
.tabs-container .tabs-left > .nav-tabs .active > a,
.tabs-container .tabs-left > .nav-tabs .active > a:hover,
.tabs-container .tabs-left > .nav-tabs .active > a:focus {
  border-color: #e7eaec transparent #e7eaec #e7eaec;
  *border-right-color: #ffffff;
}
.tabs-container .tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
}
.tabs-container .tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}
.tabs-container .tabs-right > .nav-tabs .active > a,
.tabs-container .tabs-right > .nav-tabs .active > a:hover,
.tabs-container .tabs-right > .nav-tabs .active > a:focus {
  border-color: #e7eaec #e7eaec #e7eaec transparent;
  *border-left-color: #ffffff;
  z-index: 1;
}

/* jsvectormap */
.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}
.jvectormap-tip {
  position: absolute;
  display: none;
  border: solid 1px #CDCDCD;
  border-radius: 3px;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 5px;
}
.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #1ab394;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 10px;
  height: 10px;
}
.jvectormap-zoomin {
  top: 10px;
}
.jvectormap-zoomout {
  top: 30px;
}
.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}
.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}
.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}
.jvectormap-legend-cnt {
  position: absolute;
}
.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}
.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}
.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}
.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}
.jvectormap-legend-tick-text {
  font-size: 12px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}
/*Slick Carousel */
.slick-prev:before,
.slick-next:before {
  color: #1ab394 !important;
}
/* Payments */
.payment-card {
  background: #ffffff;
  padding: 20px;
  margin-bottom: 25px;
  border: 1px solid #e7eaec;
}
.payment-icon-big {
  font-size: 60px;
  color: #d1dade;
}
.payments-method.panel-group .panel + .panel {
  margin-top: -1px;
}
.payments-method .panel-heading {
  padding: 15px;
}
.payments-method .panel {
  border-radius: 0;
}
.payments-method .panel-heading h5 {
  margin-bottom: 5px;
}
.payments-method .panel-heading i {
  font-size: 26px;
}
/* Select2 custom styles */
.select2-container--default .select2-selection--single,
.select2-container--default .select2-selection--multiple {
  border: none !important;
  background: none;
  border-radius: 0;
  border-bottom: solid 1px #babdba !important;
  padding: 3px 0 !important;
  height: auto;
  outline: none !important;
  font-family: 'Lato-Bold';
  color: #676767;
  font-size: 14px;
  letter-spacing: 0.5px;
}
/* Tour */
.tour-tour .btn.btn-default {
  background-color: #ffffff;
  border: 1px solid #d2d2d2;
  color: inherit;
}
.tour-step-backdrop {
  z-index: 2101;
}
.tour-backdrop {
  z-index: 2100;
  opacity: .7;
}
.popover[class*=tour-] {
  z-index: 2100;
}
body.tour-open .animated {
  animation-fill-mode: initial;
}
/* Resizable */
.resizable-panels .ibox {
  clear: none;
  margin: 10px;
  float: left;
  overflow: hidden;
  min-height: 150px;
  min-width: 150px;
}
.resizable-panels .ibox .ibox-content {
  height: calc(100% - 49px);
}
.ui-resizable-helper {
  background: rgba(211, 211, 211, 0.4);
}
/* Wizard step fix */
.wizard > .content > .body {
  position: relative;
}
.sidebard-panel {
  width: 220px;
  background: #ebebed;
  padding: 10px 20px;
  position: absolute;
  right: 0;
}
.sidebard-panel .feed-element img.img-circle {
  width: 32px;
  height: 32px;
}
.sidebard-panel .feed-element,
.media-body,
.sidebard-panel p {
  font-size: 12px;
}
.sidebard-panel .feed-element {
  margin-top: 20px;
  padding-bottom: 0;
}
.sidebard-panel .list-group {
  margin-bottom: 10px;
}
.sidebard-panel .list-group .list-group-item {
  padding: 5px 0;
  font-size: 12px;
  border: 0;
}
.sidebar-content .wrapper,
.wrapper.sidebar-content {
  padding-right: 230px !important;
}
.body-small .sidebar-content .wrapper,
.body-small .wrapper.sidebar-content {
  padding-right: 20px !important;
}
#right-sidebar {
  background-color: #fff;
  border-left: 1px solid #e7eaec;
  border-top: 1px solid #e7eaec;
  overflow: hidden;
  position: fixed;
  top: 60px;
  width: 260px !important;
  z-index: 1009;
  bottom: 0;
  right: -260px;
}
#right-sidebar.sidebar-open {
  right: 0;
}
#right-sidebar.sidebar-open.sidebar-top {
  top: 0;
  border-top: none;
}
.sidebar-container ul.nav-tabs {
  border: none;
}
.sidebar-container ul.nav-tabs.navs-4 li {
  width: 25%;
}
.sidebar-container ul.nav-tabs.navs-3 li {
  width: 33.3333%;
}
.sidebar-container ul.nav-tabs.navs-2 li {
  width: 50%;
}
.sidebar-container ul.nav-tabs li {
  border: none;
}
.sidebar-container ul.nav-tabs li a {
  border: none;
  padding: 12px 10px;
  margin: 0;
  border-radius: 0;
  background: #2f4050;
  color: #fff;
  text-align: center;
  border-right: 1px solid #334556;
}
.sidebar-container ul.nav-tabs li.active a {
  border: none;
  background: #f9f9f9;
  color: #676a6c;
  font-weight: bold;
}
.sidebar-container .nav-tabs > li.active > a:hover,
.sidebar-container .nav-tabs > li.active > a:focus {
  border: none;
}
.sidebar-container ul.sidebar-list {
  margin: 0;
  padding: 0;
}
.sidebar-container ul.sidebar-list li {
  border-bottom: 1px solid #e7eaec;
  padding: 15px 20px;
  list-style: none;
  font-size: 12px;
}
.sidebar-container .sidebar-message:nth-child(2n+2) {
  background: #f9f9f9;
}
.sidebar-container ul.sidebar-list li a {
  text-decoration: none;
  color: inherit;
}
.sidebar-container .sidebar-content {
  padding: 15px 20px;
  font-size: 12px;
}
.sidebar-container .sidebar-title {
  background: #f9f9f9;
  padding: 20px;
  border-bottom: 1px solid #e7eaec;
}
.sidebar-container .sidebar-title h3 {
  margin-bottom: 3px;
  padding-left: 2px;
}
.sidebar-container .tab-content h4 {
  margin-bottom: 5px;
}
.sidebar-container .sidebar-message > a > .pull-left {
  margin-right: 10px;
}
.sidebar-container .sidebar-message > a {
  text-decoration: none;
  color: inherit;
}
.sidebar-container .sidebar-message {
  padding: 15px 20px;
}
.sidebar-container .sidebar-message .message-avatar {
  height: 38px;
  width: 38px;
  border-radius: 50%;
}
.sidebar-container .setings-item {
  padding: 15px 20px;
  border-bottom: 1px solid #e7eaec;
}
html,
body {
  height: auto;
}
body.full-height-layout #wrapper,
{
  height: 100%;
}
body.boxed-layout {
  background: url('patterns/shattered.png');
}
body.boxed-layout #wrapper {
  background-color: #2f4050;
  max-width: 1200px;
  margin: 0 auto;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.75);
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.75);
}
.top-navigation.boxed-layout #wrapper,
.boxed-layout #wrapper.top-navigation {
  max-width: 1300px !important;
}
.block {
  display: block;
}
.clear {
  display: block;
  overflow: hidden;
}
a {
  cursor: pointer;
}
a:hover,
a:focus {
  text-decoration: none;
}
.border-bottom {
  border-bottom: 1px solid #e7eaec !important;
}
.font-bold {
  font-weight: 600;
}
.font-noraml {
  font-weight: 400;
}
.text-uppercase {
  text-transform: uppercase;
}
.b-r {
  border-right: 1px solid #e7eaec;
}
.hr-line-dashed {
  border-top: 1px dashed #e7eaec;
  color: #ffffff;
  background-color: #ffffff;
  height: 1px;
  margin: 20px 0;
}
.hr-line-solid {
  border-bottom: 1px solid #e7eaec;
  background-color: rgba(0, 0, 0, 0);
  border-style: solid !important;
  margin-top: 15px;
  margin-bottom: 15px;
}
video {
  width: 100% !important;
  height: auto !important;
}
/* GALLERY */
.gallery > .row > div {
  margin-bottom: 15px;
}
.fancybox img {
  margin-bottom: 5px;
  /* Only for demo */
  width: 24%;
}
/* Summernote text editor  */
.note-editor {
  height: auto !important;
  min-height: 300px;
}
.note-editor.fullscreen {
  z-index: 2050;
}
/* MODAL */
.modal-content {
  background-clip: padding-box;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0);
  border-radius: 4px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
  outline: 0 none;
  position: relative;
}
.modal-dialog {
  z-index: 2200;
}
.modal-body {
  padding: 20px 30px 30px 30px;
}
.inmodal .modal-body {
  background: #f8fafb;
}
.inmodal .modal-header {
  padding: 30px 15px;
  text-align: center;
}
.animated.modal.fade .modal-dialog {
  -webkit-transform: none;
  -ms-transform: none;
  -o-transform: none;
  transform: none;
}
.inmodal .modal-title {
  font-size: 26px;
}
.inmodal .modal-icon {
  font-size: 84px;
  color: #e2e3e3;
}
.modal-footer {
  margin-top: 0;
}
/* WRAPPERS */
#wrapper {
  width: 100%;
  overflow-x: hidden;
}
.wrapper {
  padding: 0 20px;
}
.wrapper-content {
  padding: 0;
  margin: 0;
  position: relative;
}
#content-wrapper {
    padding: 0 15px 40px;
    position: relative;
    margin: 11px 0 0 0;
}
.title-action {
  text-align: right;
  padding-top: 30px;
}
.ibox-content h1,
.ibox-content h2,
.ibox-content h3,
.ibox-content h4,
.ibox-content h5,
.ibox-title h1,
.ibox-title h2,
.ibox-title h3,
.ibox-title h4,
.ibox-title h5 {
  margin-top: 5px;
}
ul.unstyled,
ol.unstyled {
  list-style: none outside none;
  margin-left: 0;
}
.big-icon {
  font-size: 160px !important;
  color: #e5e6e7;
}
/* FOOTER */
.footer {
    background: #fff;
    border-top: 1px solid #e7eaec !important;
    bottom: 0;
    left: 0;
    padding: 10px 20px;
    position: static;
    right: 0;
    z-index: 99999;
}
.footer.fixed_full {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 10px 20px;
  background: white;
  border-top: 1px solid #e7eaec;
}
.footer.fixed {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 10px 20px;
  background: white;
  border-top: 1px solid #e7eaec;
  margin-left: 220px;
}
body.mini-navbar .footer.fixed,
body.body-small.mini-navbar .footer.fixed {
  margin: 0 0 0 70px;
}
body.mini-navbar.canvas-menu .footer.fixed,
body.canvas-menu .footer.fixed {
  margin: 0 !important;
}
body.fixed-sidebar.body-small.mini-navbar .footer.fixed {
  margin: 0 0 0 220px;
}
body.body-small .footer.fixed {
  margin-left: 0;
}
/* PANELS */
.page-heading {
  border-top: 0;
  padding: 0 10px 20px 10px;
}
.panel-heading h1,
.panel-heading h2 {
  margin-bottom: 5px;
}
/* TABLES */
.table-bordered {
  border: 1px solid #EBEBEB;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  background-color: #F5F5F6;
  border-bottom-width: 1px;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #e7e7e7;
}
.table > thead > tr > th {
  border-bottom: 1px solid #DDDDDD;
  vertical-align: bottom;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  border-top: 1px solid #e7eaec;
  line-height: 1.42857;
  padding: 8px;
  vertical-align: top;
}
/* PANELS */
.panel.blank-panel {
  background: none;
  margin: 0;
}
.blank-panel .panel-heading {
  padding-bottom: 0;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: #f7f7f7;
  border-color: transparent;
  border-bottom: #f17336;
  border-image: none;
  border-style: solid;
  border-width: 1px;
  color: #676767;
  border-radius: 0;
  cursor: default;
}
.nav.nav-tabs li {
  background: none;
  border: none;
}
.nav-tabs > li > a {
  color: #676767;
  font-weight: 600;
  padding: 10px 20px 10px 25px;
  background: #f7f7f7;
  border-radius: 0;
  font-family: 'Lato-Bold';
  font-weight: normal;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.5px;
  border-width: 0px 0px 2px 0px !important;
  border-color: #ddd;
  transition: all 0.5s;
}
.nav-tabs > li > a i.fa{
    margin-right: 6px;
    font-size: 20px;
    margin: 0 10px 0 0;
    vertical-align: middle;
    color: #80c142;
}
.nav-tabs > li > a:hover,
.nav-tabs > li > a:focus {
  background-color: #f7f7f7
  color: #676a6c;
  border-radius: 0;
}
nav.navbar.navbar-static-top .btn-nav{
    color: #434647;
    border-radius: 0;
    padding: 0;
    transition: 0.5s;
    width: 24px;
    height: 24px;
    margin: 5px 0 0 20px;
    display: none;
}
.bar1, .bar2, .bar3 {
    width: 24px;
    height: 3px;
    background-color: #434647;
    margin: 5px 0;
    transition: 0.4s;
    border-radius: 5px !important;
}
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-7px, 6px);
    transform: rotate(-45deg) translate(-7px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-5px, -5px);
    transform: rotate(45deg) translate(-5px, -5px);
}
.navActive{
  margin: 7px 0 0 230px !important;
}
nav.navbar.navbar-static-top .btn.active, nav.navbar.navbar-static-top .btn:active{
  box-shadow: none;
}
.nav-tabs>li>a:hover{
  background: #f0f0f0;
  border-color: transparent;
  box-shadow: none;
}
.nav-tabs > li.active > a i.fa, .nav-tabs > li.active > a:hover i.fa, .nav-tabs > li.active > a:focus i.fa{
  color: #f17336;
}
.ui-tab .tab-content {
  padding: 20px 0;
}
/* GLOBAL  */
.no-padding {
  padding: 0 !important;
}
.no-borders {
  border: none !important;
}
.no-margins {
  margin: 0 !important;
}
.no-top-border {
  border-top: 0 !important;
}
.ibox-content.text-box {
  padding-bottom: 0;
  padding-top: 15px;
}
.border-left-right {
  border-left: 1px solid #e7eaec;
  border-right: 1px solid #e7eaec;
  border-top: none;
  border-bottom: none;
}
.border-left {
  border-left: 1px solid #e7eaec;
  border-right: none;
  border-top: none;
  border-bottom: none;
}
.border-right {
  border-left: none;
  border-right: 1px solid #e7eaec;
  border-top: none;
  border-bottom: none;
}
.full-width {
  width: 100% !important;
}
.link-block {
  font-size: 12px;
  padding: 10px;
}
.nav.navbar-top-links .link-block a {
  font-size: 12px;
}
.link-block a {
  font-size: 10px;
  color: inherit;
}
body.mini-navbar .branding {
  display: none;
}
img.circle-border {
  border: 6px solid #fff;
  border-radius: 50%;
}
.branding {
  float: left;
  color: #fff;
  font-size: 18px;
  font-weight: 600;
  padding: 17px 20px;
  text-align: center;
  background-color: #1ab394;
}
.login-panel {
  margin-top: 25%;
}
.icons-box h3 {
  margin-top: 10px;
  margin-bottom: 10px;
}
.icons-box .infont a i {
  font-size: 25px;
  display: block;
  color: #676a6c;
}
.icons-box .infont a {
  color: #a6a8a9;
}
.icons-box .infont a {
  padding: 10px;
  margin: 1px;
  display: block;
}
.ui-draggable .ibox-title {
  cursor: move;
}
.breadcrumb {
  background-color: #ffffff;
  padding: 0;
  margin-bottom: 0;
}
.breadcrumb > li a {
  color: inherit;
}
.breadcrumb > .active {
  color: inherit;
}
code {
  background-color: #F9F2F4;
  border-radius: 4px;
  color: #ca4440;
  font-size: 90%;
  padding: 2px 4px;
  white-space: nowrap;
}
.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  /*background-color: #fff;*/
  padding: 0;
  min-height: 25px;
}
.ibox-content {
  /*background-color: #f7f7f7;*/
  color: inherit;
  padding: 15px;
  border-color: transparent;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
  /* border-style: dotted; */
  /* box-shadow: 0px 0px 1px #575656; */
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}
table.table-mail tr td {
  padding: 12px;
}
.table-mail .check-mail {
  padding-left: 20px;
}
.table-mail .mail-date {
  padding-right: 20px;
}
.star-mail,
.check-mail {
  width: 40px;
}
.unread td a,
.unread td {
  font-weight: 600;
  color: inherit;
}
.read td a,
.read td {
  font-weight: normal;
  color: inherit;
}
.unread td {
  background-color: #f9f8f8;
}
.ibox-content {
  clear: both;
}
.ibox-heading {
  background-color: #f3f6fb;
  border-bottom: none;
}
.ibox-heading h3 {
  font-weight: 200;
  font-size: 24px;
}
.ibox-title h5 {
  display: inline-block;
  font-size: 14px;
  margin: 0 0 7px;
  padding: 0;
  text-overflow: ellipsis;
  float: left;
}
.ibox-title .label {
  float: left;
  margin-left: 4px;
}
.ibox-tools {
  display: block;
  float: none;
  margin-top: 0;
  position: relative;
  padding: 0;
  text-align: right;
}
.ibox-tools a {
  cursor: pointer;
  margin-left: 5px;
  color: #c4c4c4;
}
.ibox-tools a.btn-primary {
  color: #fff;
}
.ibox-tools .dropdown-menu > li > a {
  padding: 4px 10px;
  font-size: 12px;
}
.ibox .ibox-tools.open > .dropdown-menu {
  left: auto;
  right: 0;
}
/* BACKGROUNDS */
.gray-bg {
  background-color: #f3f3f4;
}
.white-bg {
  background-color: #fff;
}
.green-bg {
  background-color: #bcd645;
}
.navy-bg {
  background-color: #1ab394;
  color: #ffffff;
}
.blue-bg {
  background-color: #1c84c6;
  color: #ffffff;
}
.lazur-bg {
  background-color: #23c6c8;
  color: #ffffff;
}
.yellow-bg {
  background-color: #f8ac59;
  color: #ffffff;
}
.red-bg {
  background-color: #ed5565;
  color: #ffffff;
}
.black-bg {
  background-color: #262626;
}
.panel-primary {
  border-color: #1ab394;
}
.panel-primary > .panel-heading {
  background-color: #1ab394;
  border-color: #1ab394;
}
.panel-success {
  border-color: #1c84c6;
}
.panel-success > .panel-heading {
  background-color: #1c84c6;
  border-color: #1c84c6;
  color: #ffffff;
}
.panel-info {
  border-color: #23c6c8;
}
.panel-info > .panel-heading {
  background-color: #23c6c8;
  border-color: #23c6c8;
  color: #ffffff;
}
.panel-warning {
  border-color: #f8ac59;
}
.panel-warning > .panel-heading {
  background-color: #f8ac59;
  border-color: #f8ac59;
  color: #ffffff;
}
.panel-danger {
  border-color: #ed5565;
}
.panel-danger > .panel-heading {
  background-color: #ed5565;
  border-color: #ed5565;
  color: #ffffff;
}
.progress-bar {
  background-color: #1ab394;
}
.progress-small,
.progress-small .progress-bar {
  height: 10px;
}
.progress-small,
.progress-mini {
  margin-top: 5px;
}
.progress-mini,
.progress-mini .progress-bar {
  height: 5px;
  margin-bottom: 0;
}
.progress-bar-navy-light {
  background-color: #3dc7ab;
}
.progress-bar-success {
  background-color: #1c84c6;
}
.progress-bar-info {
  background-color: #23c6c8;
}
.progress-bar-warning {
  background-color: #f8ac59;
}
.progress-bar-danger {
  background-color: #ed5565;
}
.panel-title {
  font-size: inherit;
}
.jumbotron {
  border-radius: 6px;
  padding: 40px;
}
.jumbotron h1 {
  margin-top: 0;
}
/* COLORS */
.text-navy {
  color: #1ab394;
}
.text-primary {
  color: inherit;
}
.text-success {
  color: #1c84c6;
}
.text-info {
  color: #23c6c8;
}
.text-warning {
  color: #f8ac59;
}
.text-danger {
  color: #ed5565;
}
.text-muted {
  color: #888888;
}
.text-white {
  color: #ffffff;
}
.simple_tag {
  background-color: #f3f3f4;
  border: 1px solid #e7eaec;
  border-radius: 2px;
  color: inherit;
  font-size: 10px;
  margin-right: 5px;
  margin-top: 5px;
  padding: 5px 12px;
  display: inline-block;
}
.img-shadow {
  -webkit-box-shadow: 0 0 3px 0 #919191;
  -moz-box-shadow: 0 0 3px 0 #919191;
  box-shadow: 0 0 3px 0 #919191;
}
/* For handle diferent bg color in AngularJS version */
.dashboards\.dashboard_2 nav.navbar,
.dashboards\.dashboard_3 nav.navbar,
.mailbox\.inbox nav.navbar,
.mailbox\.email_view nav.navbar,
.mailbox\.email_compose nav.navbar,
.dashboards\.dashboard_4_1 nav.navbar,
.metrics nav.navbar,
.metrics\.index nav.navbar,
.dashboards\.dashboard_5 nav.navbar {
  background: #fff;
}
/* For handle diferent bg color in MVC version */
.Dashboard_2 .navbar.navbar-static-top,
.Dashboard_3 .navbar.navbar-static-top,
.Dashboard_4_1 .navbar.navbar-static-top,
.ComposeEmail .navbar.navbar-static-top,
.EmailView .navbar.navbar-static-top,
.Inbox .navbar.navbar-static-top,
.Metrics .navbar.navbar-static-top,
.Dashboard_5 .navbar.navbar-static-top {
  background: #fff;
}
a.close-canvas-menu {
  position: absolute;
  top: 10px;
  right: 15px;
  z-index: 1011;
  color: #a7b1c2;
}
a.close-canvas-menu:hover {
  color: #fff;
}
.close-canvas-menu {
  display: none;
}
.canvas-menu .close-canvas-menu {
  display: block;
}
.light-navbar .navbar.navbar-static-top {
  background-color: #ffffff;
}
/* FULL HEIGHT */
.full-height {
  height: 100%;
}
.fh-breadcrumb {
  height: calc(100% - 196px);
  margin: 0 -15px;
  position: relative;
}
.fh-no-breadcrumb {
  height: calc(100% - 99px);
  margin: 0 -15px;
  position: relative;
}
.fh-column {
  background: #fff;
  height: 100%;
  width: 240px;
  float: left;
}
.modal-backdrop {
  z-index: 2040 !important;
}
.modal {
  z-index: 2050 !important;
}
.spiner-example {
  height: 200px;
  padding-top: 70px;
}
/* MARGINS & PADDINGS */
.p-xxs {
  padding: 5px;
}
.p-xs {
  padding: 10px;
}
.p-sm {
  padding: 15px;
}
.p-m {
  padding: 20px;
}
.p-md {
  padding: 25px;
}
.p-lg {
  padding: 30px;
}
.p-xl {
  padding: 40px;
}
.p-w-xs {
  padding: 0 10px;
}
.p-w-sm {
  padding: 0 15px;
}
.p-w-m {
  padding: 0 20px;
}
.p-w-md {
  padding: 0 25px;
}
.p-w-lg {
  padding: 0 30px;
}
.p-w-xl {
  padding: 0 40px;
}
.m-xxs {
  margin: 2px 4px;
}
.m-xs {
  margin: 5px;
}
.m-sm {
  margin: 10px;
}
.m {
  margin: 15px;
}
.m-md {
  margin: 20px;
}
.m-lg {
  margin: 30px;
}
.m-xl {
  margin: 50px;
}
.m-n {
  margin: 0 !important;
}
.m-l-none {
  margin-left: 0;
}
.m-l-xs {
  margin-left: 5px;
}
.m-l-sm {
  margin-left: 10px;
}
.m-l {
  margin-left: 15px;
}
.m-l-md {
  margin-left: 20px;
}
.m-l-lg {
  margin-left: 30px;
}
.m-l-xl {
  margin-left: 40px;
}
.m-l-n-xxs {
  margin-left: -1px;
}
.m-l-n-xs {
  margin-left: -5px;
}
.m-l-n-sm {
  margin-left: -10px;
}
.m-l-n {
  margin-left: -15px;
}
.m-l-n-md {
  margin-left: -20px;
}
.m-l-n-lg {
  margin-left: -30px;
}
.m-l-n-xl {
  margin-left: -40px;
}
.m-t-none {
  margin-top: 0;
}
.m-t-xxs {
  margin-top: 1px;
}
.m-t-xs {
  margin-top: 5px;
}
.m-t-sm {
  margin-top: 10px;
}
.m-t {
  margin-top: 15px;
}
.m-t-md {
  margin-top: 20px;
}
.m-t-lg {
  margin-top: 30px;
}
.m-t-xl {
  margin-top: 40px;
}
.m-t-n-xxs {
  margin-top: -1px;
}
.m-t-n-xs {
  margin-top: -5px;
}
.m-t-n-sm {
  margin-top: -10px;
}
.m-t-n {
  margin-top: -15px;
}
.m-t-n-md {
  margin-top: -20px;
}
.m-t-n-lg {
  margin-top: -30px;
}
.m-t-n-xl {
  margin-top: -40px;
}
.m-r-none {
  margin-right: 0;
}
.m-r-xxs {
  margin-right: 1px;
}
.m-r-xs {
  margin-right: 5px;
}
.m-r-sm {
  margin-right: 10px;
}
.m-r {
  margin-right: 15px;
}
.m-r-md {
  margin-right: 20px;
}
.m-r-lg {
  margin-right: 30px;
}
.m-r-xl {
  margin-right: 40px;
}
.m-r-n-xxs {
  margin-right: -1px;
}
.m-r-n-xs {
  margin-right: -5px;
}
.m-r-n-sm {
  margin-right: -10px;
}
.m-r-n {
  margin-right: -15px;
}
.m-r-n-md {
  margin-right: -20px;
}
.m-r-n-lg {
  margin-right: -30px;
}
.m-r-n-xl {
  margin-right: -40px;
}
.m-b-none {
  margin-bottom: 0;
}
.m-b-xxs {
  margin-bottom: 1px;
}
.m-b-xs {
  margin-bottom: 5px;
}
.m-b-sm {
  margin-bottom: 10px;
}
.m-b {
  margin-bottom: 15px;
}
.m-b-md {
  margin-bottom: 20px;
}
.m-b-lg {
  margin-bottom: 30px;
}
.m-b-xl {
  margin-bottom: 40px;
}
.m-b-n-xxs {
  margin-bottom: -1px;
}
.m-b-n-xs {
  margin-bottom: -5px;
}
.m-b-n-sm {
  margin-bottom: -10px;
}
.m-b-n {
  margin-bottom: -15px;
}
.m-b-n-md {
  margin-bottom: -20px;
}
.m-b-n-lg {
  margin-bottom: -30px;
}
.m-b-n-xl {
  margin-bottom: -40px;
}
.space-15 {
  margin: 15px 0;
}
.space-20 {
  margin: 20px 0;
}
.space-25 {
  margin: 25px 0;
}
.space-30 {
  margin: 30px 0;
}
.fullscreen-ibox-mode .animated {
  animation: none;
}
body.fullscreen-ibox-mode {
  overflow-y: hidden;
}
.ibox.fullscreen {
  z-index: 2030;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  margin-bottom: 0;
}
.ibox.fullscreen .collapse-link {
  display: none;
}
.ibox.fullscreen .ibox-content {
  min-height: calc(100% - 48px);
}
body.modal-open {
  padding-right: inherit !important;
}
body.modal-open .animated {
  animation-fill-mode: initial;
  z-index: inherit;
}
/* Show profile dropdown on fixed sidebar */
body.mini-navbar.fixed-sidebar .profile-element,
.block {
  display: block !important;
}
body.mini-navbar.fixed-sidebar .nav-header {
  padding: 33px 25px;
}
body.mini-navbar.fixed-sidebar .logo-element {
  display: none;
}
.fullscreen-video .animated {
  animation: none;
}
/* SEARCH PAGE */
.search-form {
  margin-top: 10px;
}
.search-result h3 {
  margin-bottom: 0;
  color: #1E0FBE;
}
.search-result .search-link {
  color: #006621;
}
.search-result p {
  font-size: 12px;
  margin-top: 5px;
}
/* CONTACTS */
.contact-box {
  background-color: #ffffff;
  border: 1px solid #e7eaec;
  padding: 20px;
  margin-bottom: 20px;
}
.contact-box > a {
  color: inherit;
}
.contact-box.center-version {
  border: 1px solid #e7eaec;
  padding: 0;
}
.contact-box.center-version > a {
  display: block;
  background-color: #ffffff;
  padding: 20px;
  text-align: center;
}
.contact-box.center-version > a img {
  width: 80px;
  height: 80px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.contact-box.center-version address {
  margin-bottom: 0;
}
.contact-box .contact-box-footer {
  text-align: center;
  background-color: #ffffff;
  border-top: 1px solid #e7eaec;
  padding: 15px 20px;
}
/* INVOICE */
.invoice-table tbody > tr > td:last-child,
.invoice-table tbody > tr > td:nth-child(4),
.invoice-table tbody > tr > td:nth-child(3),
.invoice-table tbody > tr > td:nth-child(2) {
  text-align: right;
}
.invoice-table thead > tr > th:last-child,
.invoice-table thead > tr > th:nth-child(4),
.invoice-table thead > tr > th:nth-child(3),
.invoice-table thead > tr > th:nth-child(2) {
  text-align: right;
}
.invoice-total > tbody > tr > td:first-child {
  text-align: right;
}
.invoice-total > tbody > tr > td {
  border: 0 none;
}
.invoice-total > tbody > tr > td:last-child {
  border-bottom: 1px solid #DDDDDD;
  text-align: right;
  width: 15%;
}
/* ERROR & LOGIN & LOCKSCREEN*/
.middle-box {
  max-width: 400px;
  z-index: 100;
  margin: 0 auto;
  padding-top: 40px;
}
.lockscreen.middle-box {
  width: 200px;
  padding-top: 110px;
}
.loginscreen.middle-box {
  width: 300px;
}
.loginColumns {
  max-width: 800px;
  margin: 0 auto;
  padding: 100px 20px 20px 20px;
}
.passwordBox {
  max-width: 460px;
  margin: 0 auto;
  padding: 100px 20px 20px 20px;
}
.logo-name {
  color: #e6e6e6;
  font-size: 180px;
  font-weight: 800;
  letter-spacing: -10px;
  margin-bottom: 0;
}
.middle-box h1 {
  font-size: 170px;
}
.wrapper .middle-box {
  margin-top: 140px;
}
.lock-word {
  z-index: 10;
  position: absolute;
  top: 110px;
  left: 50%;
  margin-left: -470px;
}
.lock-word span {
  font-size: 100px;
  font-weight: 600;
  color: #e9e9e9;
  display: inline-block;
}
.lock-word .first-word {
  margin-right: 160px;
}
/* DASBOARD */
.dashboard-header {
  border-top: 0;
  padding: 20px 20px 20px 20px;
}
.dashboard-header h2 {
  margin-top: 10px;
  font-size: 26px;
}
.fist-item {
  border-top: none !important;
}
.statistic-box {
  margin-top: 40px;
}
.dashboard-header .list-group-item span.label {
  margin-right: 10px;
}
.list-group.clear-list .list-group-item {
  border-top: 1px solid #e7eaec;
  border-bottom: 0;
  border-right: 0;
  border-left: 0;
  padding: 10px 0;
}
ul.clear-list:first-child {
  border-top: none !important;
}
/* Intimeline */
.timeline-item .date i {
  position: absolute;
  top: 0;
  right: 0;
  padding: 5px;
  width: 30px;
  text-align: center;
  border-top: 1px solid #e7eaec;
  border-bottom: 1px solid #e7eaec;
  border-left: 1px solid #e7eaec;
  background: #f8f8f8;
}
.timeline-item .date {
  text-align: right;
  width: 110px;
  position: relative;
  padding-top: 30px;
}
.timeline-item .content {
  border-left: 1px solid #e7eaec;
  border-top: 1px solid #e7eaec;
  padding-top: 10px;
  min-height: 100px;
}
.timeline-item .content:hover {
  background: #f6f6f6;
}
/* PIN BOARD */
ul.notes li,
ul.tag-list li {
  list-style: none;
}
ul.notes li h4 {
  margin-top: 20px;
  font-size: 16px;
}
ul.notes li div {
  text-decoration: none;
  color: #000;
  background: #ffc;
  display: block;
  height: 140px;
  width: 140px;
  padding: 1em;
  position: relative;
}
ul.notes li div small {
  position: absolute;
  top: 5px;
  right: 5px;
  font-size: 10px;
}
ul.notes li div a {
  position: absolute;
  right: 10px;
  bottom: 10px;
  color: inherit;
}
ul.notes li {
  margin: 10px 40px 50px 0;
  float: left;
}
ul.notes li div p {
  font-size: 12px;
}
ul.notes li div {
  text-decoration: none;
  color: #000;
  background: #ffc;
  display: block;
  height: 140px;
  width: 140px;
  padding: 1em;
  /* Firefox */
  -moz-box-shadow: 5px 5px 2px #212121;
  /* Safari+Chrome */
  -webkit-box-shadow: 5px 5px 2px rgba(33, 33, 33, 0.7);
  /* Opera */
  box-shadow: 5px 5px 2px rgba(33, 33, 33, 0.7);
}
ul.notes li div {
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform: rotate(-6deg);
}
ul.notes li:nth-child(even) div {
  -o-transform: rotate(4deg);
  -webkit-transform: rotate(4deg);
  -moz-transform: rotate(4deg);
  position: relative;
  top: 5px;
}
ul.notes li:nth-child(3n) div {
  -o-transform: rotate(-3deg);
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  position: relative;
  top: -5px;
}
ul.notes li:nth-child(5n) div {
  -o-transform: rotate(5deg);
  -webkit-transform: rotate(5deg);
  -moz-transform: rotate(5deg);
  position: relative;
  top: -10px;
}
ul.notes li div:hover,
ul.notes li div:focus {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
  position: relative;
  z-index: 5;
}
ul.notes li div {
  text-decoration: none;
  color: #000;
  background: #ffc;
  display: block;
  height: 210px;
  width: 210px;
  padding: 1em;
  -moz-box-shadow: 5px 5px 7px #212121;
  -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  -moz-transition: -moz-transform 0.15s linear;
  -o-transition: -o-transform 0.15s linear;
  -webkit-transition: -webkit-transform 0.15s linear;
}
/* FILE MANAGER */
.file-box {
  float: left;
  width: 220px;
}
.file-manager h5 {
  text-transform: uppercase;
}
.file-manager {
  list-style: none outside none;
  margin: 0;
  padding: 0;
}
.folder-list li a {
  color: #666666;
  display: block;
  padding: 5px 0;
}
.folder-list li {
  border-bottom: 1px solid #e7eaec;
  display: block;
}
.folder-list li i {
  margin-right: 8px;
  color: #3d4d5d;
}
.category-list li a {
  color: #666666;
  display: block;
  padding: 5px 0;
}
.category-list li {
  display: block;
}
.category-list li i {
  margin-right: 8px;
  color: #3d4d5d;
}
.category-list li a .text-navy {
  color: #1ab394;
}
.category-list li a .text-primary {
  color: #1c84c6;
}
.category-list li a .text-info {
  color: #23c6c8;
}
.category-list li a .text-danger {
  color: #EF5352;
}
.category-list li a .text-warning {
  color: #F8AC59;
}
.file-manager h5.tag-title {
  margin-top: 20px;
}
.tag-list li {
  float: left;
}
.tag-list li a {
  font-size: 10px;
  background-color: #f3f3f4;
  padding: 5px 12px;
  color: inherit;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-right: 5px;
  margin-top: 5px;
  display: block;
}
.file {
  border: 1px solid #e7eaec;
  padding: 0;
  background-color: #ffffff;
  position: relative;
  margin-bottom: 20px;
  margin-right: 20px;
}
.file-manager .hr-line-dashed {
  margin: 15px 0;
}
.file .icon,
.file .image {
  height: 100px;
  overflow: hidden;
}
.file .icon {
  padding: 15px 10px;
  text-align: center;
}
.file-control {
  color: inherit;
  font-size: 11px;
  margin-right: 10px;
}
.file-control.active {
  text-decoration: underline;
}
.file .icon i {
  font-size: 70px;
  color: #dadada;
}
.file .file-name {
  padding: 10px;
  background-color: #f8f8f8;
  border-top: 1px solid #e7eaec;
}
.file-name small {
  color: #676a6c;
}
.corner {
  position: absolute;
  display: inline-block;
  width: 0;
  height: 0;
  line-height: 0;
  border: 0.6em solid transparent;
  border-right: 0.6em solid #f1f1f1;
  border-bottom: 0.6em solid #f1f1f1;
  right: 0em;
  bottom: 0em;
}
a.compose-mail {
  padding: 8px 10px;
}
.mail-search {
  max-width: 300px;
}
/* PROFILE */
.profile-content {
  border-top: none !important;
}
.profile-stats {
  margin-right: 10px;
}
.profile-image {
  width: 120px;
  float: left;
}
.profile-image img {
  width: 96px;
  height: 96px;
}
.profile-info {
  margin-left: 120px;
}
.feed-activity-list .feed-element {
  border-bottom: 1px solid #e7eaec;
}
.feed-element:first-child {
  margin-top: 0;
}
.feed-element {
  padding-bottom: 15px;
}
.feed-element,
.feed-element .media {
  margin-top: 15px;
}
.feed-element,
.media-body {
  overflow: hidden;
}
.feed-element > .pull-left {
  margin-right: 10px;
}
.feed-element img.img-circle,
.dropdown-messages-box img.img-circle {
  width: 38px;
  height: 38px;
}
.feed-element .well {
  border: 1px solid #e7eaec;
  box-shadow: none;
  margin-top: 10px;
  margin-bottom: 5px;
  padding: 10px 20px;
  font-size: 11px;
  line-height: 16px;
}
.feed-element .actions {
  margin-top: 10px;
}
.feed-element .photos {
  margin: 10px 0;
}
.feed-photo {
  max-height: 180px;
  border-radius: 4px;
  overflow: hidden;
  margin-right: 10px;
  margin-bottom: 10px;
}
.file-list li {
  padding: 5px 10px;
  font-size: 11px;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-bottom: 5px;
}
.file-list li a {
  color: inherit;
}
.file-list li a:hover {
  color: #1ab394;
}
.user-friends img {
  width: 42px;
  height: 42px;
  margin-bottom: 5px;
  margin-right: 5px;
}
/* MAILBOX */
.mail-box {
  background-color: #ffffff;
  border: 1px solid #e7eaec;
  border-top: 0;
  padding: 0;
  margin-bottom: 20px;
}
.mail-box-header {
  background-color: #ffffff;
  border: 1px solid #e7eaec;
  border-bottom: 0;
  padding: 30px 20px 20px 20px;
}
.mail-box-header h2 {
  margin-top: 0;
}
.mailbox-content .tag-list li a {
  background: #ffffff;
}
.mail-body {
  border-top: 1px solid #e7eaec;
  padding: 20px;
}
.mail-text {
  border-top: 1px solid #e7eaec;
}
.mail-text .note-toolbar {
  padding: 10px 15px;
}
.mail-body .form-group {
  margin-bottom: 5px;
}
.mail-text .note-editor .note-toolbar {
  background-color: #F9F8F8;
}
.mail-attachment {
  border-top: 1px solid #e7eaec;
  padding: 20px;
  font-size: 12px;
}
.mailbox-content {
  background: none;
  border: none;
  padding: 10px;
}
.mail-ontact {
  width: 23%;
}
/* PROJECTS */
.project-people,
.project-actions {
  text-align: right;
  vertical-align: middle;
}
dd.project-people {
  text-align: left;
  margin-top: 5px;
}
.project-people img {
  width: 32px;
  height: 32px;
}
.project-title a {
  font-size: 14px;
  color: #676a6c;
  font-weight: 600;
}
.project-list table tr td {
  border-top: none;
  border-bottom: 1px solid #e7eaec;
  padding: 15px 10px;
  vertical-align: middle;
}
.project-manager .tag-list li a {
  font-size: 10px;
  background-color: white;
  padding: 5px 12px;
  color: inherit;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-right: 5px;
  margin-top: 5px;
  display: block;
}
.project-files li a {
  font-size: 11px;
  color: #676a6c;
  margin-left: 10px;
  line-height: 22px;
}
/* FAQ */
.faq-item {
  padding: 20px;
  margin-bottom: 2px;
  background: #fff;
}
.faq-question {
  font-size: 18px;
  font-weight: 600;
  color: #1ab394;
  display: block;
}
.faq-question:hover {
  color: #179d82;
}
.faq-answer {
  margin-top: 10px;
  background: #f3f3f4;
  border: 1px solid #e7eaec;
  border-radius: 3px;
  padding: 15px;
}
.faq-item .tag-item {
  background: #f3f3f4;
  padding: 2px 6px;
  font-size: 10px;
  text-transform: uppercase;
}
/* Chat view */
.message-input {
  height: 90px !important;
}
.chat-avatar {
  white: 36px;
  height: 36px;
  float: left;
  margin-right: 10px;
}
.chat-user-name {
  padding: 10px;
}
.chat-user {
  padding: 8px 10px;
  border-bottom: 1px solid #e7eaec;
}
.chat-user a {
  color: inherit;
}
.chat-view {
  z-index: 20012;
}
.chat-users,
.chat-statistic {
  margin-left: -30px;
}

.chat-view .ibox-content {
  padding: 0;
}
.chat-message {
  padding: 10px 20px;
}
.message-avatar {
  height: 48px;
  width: 48px;
  border: 1px solid #e7eaec;
  border-radius: 4px;
  margin-top: 1px;
}
.chat-discussion .chat-message.left .message-avatar {
  float: left;
  margin-right: 10px;
}
.chat-discussion .chat-message.right .message-avatar {
  float: right;
  margin-left: 10px;
}
.message {
  background-color: #fff;
  border: 1px solid #e7eaec;
  text-align: left;
  display: block;
  padding: 10px 20px;
  position: relative;
  border-radius: 4px;
}
.chat-discussion .chat-message.left .message-date {
  float: right;
}
.chat-discussion .chat-message.right .message-date {
  float: left;
}
.chat-discussion .chat-message.left .message {
  text-align: left;
  margin-left: 55px;
}
.chat-discussion .chat-message.right .message {
  text-align: right;
  margin-right: 55px;
}
.message-date {
  font-size: 10px;
  color: #888888;
}
.message-content {
  display: block;
}
.chat-discussion {
  background: #eee;
  padding: 15px;
  height: 400px;
  overflow-y: auto;
}
.chat-users {
  overflow-y: auto;
  height: 400px;
}
.chat-message-form .form-group {
  margin-bottom: 0;
}
/* jsTree */
.jstree-open > .jstree-anchor > .fa-folder:before {
  content: "\f07c";
}
.jstree-default .jstree-icon.none {
  width: 0;
}
/* CLIENTS */
.clients-list {
  margin-top: 20px;
}
.clients-list .tab-pane {
  position: relative;
  height: 600px;
}
.client-detail {
  position: relative;
  height: 620px;
}
.clients-list table tr td {
  height: 46px;
  vertical-align: middle;
  border: none;
}
.client-link {
  font-weight: 600;
  color: inherit;
}
.client-link:hover {
  color: inherit;
}
.client-avatar {
  width: 42px;
}
.client-avatar img {
  width: 28px;
  height: 28px;
  border-radius: 50%;
}
.contact-type {
  width: 20px;
  color: #c1c3c4;
}
.client-status {
  text-align: left;
}
.client-detail .vertical-timeline-content p {
  margin: 0;
}
.client-detail .vertical-timeline-icon.gray-bg {
  color: #a7aaab;
}
.clients-list .nav-tabs > li.active > a,
.clients-list .nav-tabs > li.active > a:hover,
.clients-list .nav-tabs > li.active > a:focus {
  border-bottom: 1px solid #fff;
}
/* BLOG ARTICLE */
.blog h2 {
  font-weight: 700;
}
.blog h5 {
  margin: 0 0 5px 0;
}
.blog .btn {
  margin: 0 0 5px 0;
}
.article h1 {
  font-size: 48px;
  font-weight: 700;
  color: #2F4050;
}
.article p {
  font-size: 15px;
  line-height: 26px;
}
.article-title {
  text-align: center;
  margin: 40px 0 100px 0;
}
.article .ibox-content {
  padding: 40px;
}
/* ISSUE TRACKER */
.issue-tracker .btn-link {
  color: #1ab394;
}
table.issue-tracker tbody tr td {
  vertical-align: middle;
  height: 50px;
}
.issue-info {
  width: 50%;
}
.issue-info a {
  font-weight: 600;
  color: #676a6c;
}
.issue-info small {
  display: block;
}
/* TEAMS */
.team-members {
  margin: 10px 0;
}
.team-members img.img-circle {
  width: 42px;
  height: 42px;
  margin-bottom: 5px;
}
/* AGILE BOARD */
.sortable-list {
  padding: 10px 0;
}
.agile-list {
  list-style: none;
  margin: 0;
}
.agile-list li {
  background: #FAFAFB;
  border: 1px solid #e7eaec;
  margin: 0 0 10px 0;
  padding: 10px;
  border-radius: 2px;
}
.agile-list li:hover {
  cursor: pointer;
  background: #fff;
}
.agile-list li.warning-element {
  border-left: 3px solid #f8ac59;
}
.agile-list li.danger-element {
  border-left: 3px solid #ed5565;
}
.agile-list li.info-element {
  border-left: 3px solid #1c84c6;
}
.agile-list li.success-element {
  border-left: 3px solid #1ab394;
}
.agile-detail {
  margin-top: 5px;
  font-size: 12px;
}
/* DIFF */
ins {
  background-color: #c6ffc6;
  text-decoration: none;
}
del {
  background-color: #ffc6c6;
}
/* E-commerce */
.product-box {
  padding: 0;
  border: 1px solid #e7eaec;
}
.product-box:hover,
.product-box.active {
  border: 1px solid transparent;
  -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
  -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
  box-shadow: 0 3px 7px 0 #a8a8a8;
}
.product-imitation {
  text-align: center;
  padding: 90px 0;
  background-color: #f8f8f9;
  color: #bebec3;
  font-weight: 600;
}
.cart-product-imitation {
  text-align: center;
  padding-top: 30px;
  height: 80px;
  width: 80px;
  background-color: #f8f8f9;
}
.product-imitation.xl {
  padding: 120px 0;
}
.product-desc {
  padding: 20px;
  position: relative;
}
.ecommerce .tag-list {
  padding: 0;
}
.ecommerce .fa-star {
  color: #d1dade;
}
.ecommerce .fa-star.active {
  color: #f8ac59;
}
.ecommerce .note-editor {
  border: 1px solid #e7eaec;
}
table.shoping-cart-table {
  margin-bottom: 0;
}
table.shoping-cart-table tr td {
  border: none;
  text-align: right;
}
table.shoping-cart-table tr td.desc,
table.shoping-cart-table tr td:first-child {
  text-align: left;
}
table.shoping-cart-table tr td:last-child {
  width: 80px;
}
.product-name {
  font-size: 16px;
  font-weight: 600;
  color: #676a6c;
  display: block;
  margin: 2px 0 5px 0;
}
.product-name:hover,
.product-name:focus {
  color: #1ab394;
}
.product-price {
  font-size: 14px;
  font-weight: 600;
  color: #ffffff;
  background-color: #1ab394;
  padding: 6px 12px;
  position: absolute;
  top: -32px;
  right: 0;
}
.product-detail .ibox-content {
  padding: 30px 30px 50px 30px;
}
.image-imitation {
  background-color: #f8f8f9;
  text-align: center;
  padding: 200px 0;
}
.product-main-price small {
  font-size: 10px;
}
.product-images {
  margin: 0 20px;
}
/* Social feed */
.social-feed-separated .social-feed-box {
  margin-left: 62px;
}
.social-feed-separated .social-avatar {
  float: left;
  padding: 0;
}
.social-feed-separated .social-avatar img {
  width: 52px;
  height: 52px;
  border: 1px solid #e7eaec;
}
.social-feed-separated .social-feed-box .social-avatar {
  padding: 15px 15px 0 15px;
  float: none;
}
.social-feed-box {
  /*padding: 15px;*/
  border: 1px solid #e7eaec;
  background: #fff;
  margin-bottom: 15px;
}
.article .social-feed-box {
  margin-bottom: 0;
  border-bottom: none;
}
.article .social-feed-box:last-child {
  margin-bottom: 0;
  border-bottom: 1px solid #e7eaec;
}
.article .social-feed-box p {
  font-size: 13px;
  line-height: 18px;
}
.social-action {
  margin: 15px;
}
.social-avatar {
  padding: 15px 15px 0 15px;
}
.social-comment .social-comment {
  margin-left: 45px;
}
.social-avatar img {
  height: 40px;
  width: 40px;
  margin-right: 10px;
}
.social-avatar .media-body a {
  font-size: 14px;
  display: block;
}
.social-body {
  padding: 15px;
}
.social-body img {
  margin-bottom: 10px;
}
.social-footer {
  border-top: 1px solid #e7eaec;
  padding: 10px 15px;
  background: #f9f9f9;
}
.social-footer .social-comment img {
  width: 32px;
  margin-right: 10px;
}
.social-comment:first-child {
  margin-top: 0;
}
.social-comment {
  margin-top: 15px;
}
.social-comment textarea {
  font-size: 12px;
}
/* Vote list */
.vote-item {
  padding: 20px 25px;
  background: #ffffff;
  border-top: 1px solid #e7eaec;
}
.vote-item:last-child {
  border-bottom: 1px solid #e7eaec;
}
.vote-item:hover {
  background: #fbfbfb;
}
.vote-actions {
  float: left;
  width: 30px;
  margin-right: 15px;
  text-align: center;
}
.vote-actions a {
  color: #1ab394;
  font-weight: 600;
}
.vote-actions {
  font-weight: 600;
}
.vote-title {
  display: block;
  color: inherit;
  font-size: 18px;
  font-weight: 600;
  margin-top: 5px;
  margin-bottom: 2px;
}
.vote-title:hover,
.vote-title:focus {
  color: inherit;
}
.vote-info,
.vote-title {
  margin-left: 45px;
}
.vote-info,
.vote-info a {
  color: #b4b6b8;
  font-size: 12px;
}
.vote-info a {
  margin-right: 10px;
}
.vote-info a:hover {
  color: #1ab394;
}
.vote-icon {
  text-align: right;
  font-size: 38px;
  display: block;
  color: #e8e9ea;
}
.vote-icon.active {
  color: #1ab394;
}
body.body-small .vote-icon {
  display: none;
}
.lightBoxGallery {
  text-align: center;
}
.lightBoxGallery img {
  margin: 5px;
}
#small-chat {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 100;
}
#small-chat .badge {
  position: absolute;
  top: -3px;
  right: -4px;
}
.open-small-chat {
  height: 38px;
  width: 38px;
  display: block;
  background: #1ab394;
  padding: 9px 8px;
  text-align: center;
  color: #fff;
  border-radius: 50%;
}
.open-small-chat:hover {
  color: white;
  background: #1ab394;
}
.small-chat-box {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 75px;
  background: #fff;
  border: 1px solid #e7eaec;
  width: 230px;
  height: 320px;
  border-radius: 4px;
}
.small-chat-box.ng-small-chat {
  display: block;
}
.body-small .small-chat-box {
  bottom: 70px;
  right: 20px;
}
.small-chat-box.active {
  display: block;
}
.small-chat-box .heading {
  background: #2f4050;
  padding: 8px 15px;
  font-weight: bold;
  color: #fff;
}
.small-chat-box .chat-date {
  opacity: 0.6;
  font-size: 10px;
  font-weight: normal;
}
.small-chat-box .content {
  padding: 15px 15px;
}
.small-chat-box .content .author-name {
  font-weight: bold;
  margin-bottom: 3px;
  font-size: 11px;
}
.small-chat-box .content > div {
  padding-bottom: 20px;
}
.small-chat-box .content .chat-message {
  padding: 5px 10px;
  border-radius: 6px;
  font-size: 11px;
  line-height: 14px;
  max-width: 80%;
  background: #f3f3f4;
  margin-bottom: 10px;
}
.small-chat-box .content .chat-message.active {
  background: #1ab394;
  color: #fff;
}
.small-chat-box .content .left {
  text-align: left;
  clear: both;
}
.small-chat-box .content .left .chat-message {
  float: left;
}
.small-chat-box .content .right {
  text-align: right;
  clear: both;
}
.small-chat-box .content .right .chat-message {
  float: right;
}
.small-chat-box .form-chat {
  padding: 10px 10px;
}
/*
 * metismenu - v2.0.2
 * A jQuery menu plugin
 * https://github.com/onokumus/metisMenu
 *
 * Made by Osman Nuri Okumus
 * Under MIT License
 */
.metismenu .plus-minus,
.metismenu .plus-times {
  float: right;
}
.metismenu .arrow {
  float: right;
  line-height: 20px;
  font-size: 14px;
}
.metismenu .glyphicon.arrow:before {
  content: "\e079";
}
.metismenu .active > a > .glyphicon.arrow:before {
  content: "\e114";
}
.metismenu .fa.arrow:before {
  content: "\f105";
}
.metismenu .active > a > .fa.arrow:before {
  content: "\f107";
}
.metismenu .ion.arrow:before {
  content: "\f3d2";
}
.metismenu .active > a > .ion.arrow:before {
  content: "\f3d0";
}
.metismenu .fa.plus-minus:before,
.metismenu .fa.plus-times:before {
  content: "\f067";
}
.metismenu .active > a > .fa.plus-times {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.metismenu .active > a > .fa.plus-minus:before {
  content: "\f068";
}
.metismenu .collapse {
  display: none;
}
.metismenu .collapse.in {
  display: block;
}
.metismenu .collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-duration: .35s;
  transition-duration: .35s;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-rotating-plane"></div>
 *
 */
.sk-spinner-rotating-plane.sk-spinner {
  width: 30px;
  height: 30px;
  background-color: #1ab394;
  margin: 0 auto;
  -webkit-animation: sk-rotatePlane 1.2s infinite ease-in-out;
  animation: sk-rotatePlane 1.2s infinite ease-in-out;
}
@-webkit-keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
  }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
@keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
  }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-double-bounce">
 *      <div class="sk-double-bounce1"></div>
 *      <div class="sk-double-bounce2"></div>
 *    </div>
 *
 */
.sk-spinner-double-bounce.sk-spinner {
  width: 40px;
  height: 40px;
  position: relative;
  margin: 0 auto;
}
.sk-spinner-double-bounce .sk-double-bounce1,
.sk-spinner-double-bounce .sk-double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #1ab394;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: sk-doubleBounce 2s infinite ease-in-out;
  animation: sk-doubleBounce 2s infinite ease-in-out;
}
.sk-spinner-double-bounce .sk-double-bounce2 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes sk-doubleBounce {
  0%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes sk-doubleBounce {
  0%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-wave">
 *      <div class="sk-rect1"></div>
 *      <div class="sk-rect2"></div>
 *      <div class="sk-rect3"></div>
 *      <div class="sk-rect4"></div>
 *      <div class="sk-rect5"></div>
 *    </div>
 *
 */
.sk-spinner-wave.sk-spinner {
  margin: 0 auto;
  width: 50px;
  height: 30px;
  text-align: center;
  font-size: 10px;
}
.sk-spinner-wave div {
  background-color: #1ab394;
  height: 100%;
  width: 6px;
  display: inline-block;
  -webkit-animation: sk-waveStretchDelay 1.2s infinite ease-in-out;
  animation: sk-waveStretchDelay 1.2s infinite ease-in-out;
}
.sk-spinner-wave .sk-rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
.sk-spinner-wave .sk-rect3 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
.sk-spinner-wave .sk-rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
.sk-spinner-wave .sk-rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
@-webkit-keyframes sk-waveStretchDelay {
  0%,
  40%,
  100% {
    -webkit-transform: scaleY(0.4);
    transform: scaleY(0.4);
  }
  20% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@keyframes sk-waveStretchDelay {
  0%,
  40%,
  100% {
    -webkit-transform: scaleY(0.4);
    transform: scaleY(0.4);
  }
  20% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-wandering-cubes">
 *      <div class="sk-cube1"></div>
 *      <div class="sk-cube2"></div>
 *    </div>
 *
 */
.sk-spinner-wandering-cubes.sk-spinner {
  margin: 0 auto;
  width: 32px;
  height: 32px;
  position: relative;
}
.sk-spinner-wandering-cubes .sk-cube1,
.sk-spinner-wandering-cubes .sk-cube2 {
  background-color: #1ab394;
  width: 10px;
  height: 10px;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: sk-wanderingCubeMove 1.8s infinite ease-in-out;
  animation: sk-wanderingCubeMove 1.8s infinite ease-in-out;
}
.sk-spinner-wandering-cubes .sk-cube2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
@-webkit-keyframes sk-wanderingCubeMove {
  25% {
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    transform: translateX(42px) rotate(-90deg) scale(0.5);
  }
  50% {
    /* Hack to make FF rotate in the right direction */
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
    transform: translateX(42px) translateY(42px) rotate(-179deg);
  }
  50.1% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    transform: translateX(42px) translateY(42px) rotate(-180deg);
  }
  75% {
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
@keyframes sk-wanderingCubeMove {
  25% {
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    transform: translateX(42px) rotate(-90deg) scale(0.5);
  }
  50% {
    /* Hack to make FF rotate in the right direction */
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
    transform: translateX(42px) translateY(42px) rotate(-179deg);
  }
  50.1% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    transform: translateX(42px) translateY(42px) rotate(-180deg);
  }
  75% {
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-pulse"></div>
 *
 */
.sk-spinner-pulse.sk-spinner {
  width: 40px;
  height: 40px;
  margin: 0 auto;
  background-color: #1ab394;
  border-radius: 100%;
  -webkit-animation: sk-pulseScaleOut 1s infinite ease-in-out;
  animation: sk-pulseScaleOut 1s infinite ease-in-out;
}
@-webkit-keyframes sk-pulseScaleOut {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}
@keyframes sk-pulseScaleOut {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-chasing-dots">
 *      <div class="sk-dot1"></div>
 *      <div class="sk-dot2"></div>
 *    </div>
 *
 */
.sk-spinner-chasing-dots.sk-spinner {
  margin: 0 auto;
  width: 40px;
  height: 40px;
  position: relative;
  text-align: center;
  -webkit-animation: sk-chasingDotsRotate 2s infinite linear;
  animation: sk-chasingDotsRotate 2s infinite linear;
}
.sk-spinner-chasing-dots .sk-dot1,
.sk-spinner-chasing-dots .sk-dot2 {
  width: 60%;
  height: 60%;
  display: inline-block;
  position: absolute;
  top: 0;
  background-color: #1ab394;
  border-radius: 100%;
  -webkit-animation: sk-chasingDotsBounce 2s infinite ease-in-out;
  animation: sk-chasingDotsBounce 2s infinite ease-in-out;
}
.sk-spinner-chasing-dots .sk-dot2 {
  top: auto;
  bottom: 0;
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes sk-chasingDotsRotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes sk-chasingDotsRotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes sk-chasingDotsBounce {
  0%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes sk-chasingDotsBounce {
  0%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-three-bounce">
 *      <div class="sk-bounce1"></div>
 *      <div class="sk-bounce2"></div>
 *      <div class="sk-bounce3"></div>
 *    </div>
 *
 */
.sk-spinner-three-bounce.sk-spinner {
  margin: 0 auto;
  width: 70px;
  text-align: center;
}
.sk-spinner-three-bounce div {
  width: 18px;
  height: 18px;
  background-color: #1ab394;
  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-threeBounceDelay 1.4s infinite ease-in-out;
  animation: sk-threeBounceDelay 1.4s infinite ease-in-out;
  /* Prevent first frame from flickering when animation starts */
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.sk-spinner-three-bounce .sk-bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.sk-spinner-three-bounce .sk-bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
@-webkit-keyframes sk-threeBounceDelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes sk-threeBounceDelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-circle">
 *      <div class="sk-circle1 sk-circle"></div>
 *      <div class="sk-circle2 sk-circle"></div>
 *      <div class="sk-circle3 sk-circle"></div>
 *      <div class="sk-circle4 sk-circle"></div>
 *      <div class="sk-circle5 sk-circle"></div>
 *      <div class="sk-circle6 sk-circle"></div>
 *      <div class="sk-circle7 sk-circle"></div>
 *      <div class="sk-circle8 sk-circle"></div>
 *      <div class="sk-circle9 sk-circle"></div>
 *      <div class="sk-circle10 sk-circle"></div>
 *      <div class="sk-circle11 sk-circle"></div>
 *      <div class="sk-circle12 sk-circle"></div>
 *    </div>
 *
 */
.sk-spinner-circle.sk-spinner {
  margin: 0 auto;
  width: 22px;
  height: 22px;
  position: relative;
}
.sk-spinner-circle .sk-circle {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-spinner-circle .sk-circle:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 20%;
  height: 20%;
  background-color: #1ab394;
  border-radius: 100%;
  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out;
  animation: sk-circleBounceDelay 1.2s infinite ease-in-out;
  /* Prevent first frame from flickering when animation starts */
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.sk-spinner-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  transform: rotate(30deg);
}
.sk-spinner-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  transform: rotate(60deg);
}
.sk-spinner-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.sk-spinner-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  transform: rotate(120deg);
}
.sk-spinner-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  transform: rotate(150deg);
}
.sk-spinner-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.sk-spinner-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  transform: rotate(210deg);
}
.sk-spinner-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  transform: rotate(240deg);
}
.sk-spinner-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.sk-spinner-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  transform: rotate(300deg);
}
.sk-spinner-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  transform: rotate(330deg);
}
.sk-spinner-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
.sk-spinner-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
.sk-spinner-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
.sk-spinner-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
.sk-spinner-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}
.sk-spinner-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}
.sk-spinner-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
.sk-spinner-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}
.sk-spinner-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}
.sk-spinner-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}
.sk-spinner-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}
@-webkit-keyframes sk-circleBounceDelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes sk-circleBounceDelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-cube-grid">
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *      <div class="sk-cube"></div>
 *    </div>
 *
 */
.sk-spinner-cube-grid {
  /*
   * Spinner positions
   * 1 2 3
   * 4 5 6
   * 7 8 9
   */
}
.sk-spinner-cube-grid.sk-spinner {
  width: 30px;
  height: 30px;
  margin: 0 auto;
}
.sk-spinner-cube-grid .sk-cube {
  width: 33%;
  height: 33%;
  background-color: #1ab394;
  float: left;
  -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
  animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
}
.sk-spinner-cube-grid .sk-cube:nth-child(1) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(2) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(3) {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(4) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(5) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(6) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(7) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(8) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
.sk-spinner-cube-grid .sk-cube:nth-child(9) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
@-webkit-keyframes sk-cubeGridScaleDelay {
  0%,
  70%,
  100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
@keyframes sk-cubeGridScaleDelay {
  0%,
  70%,
  100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-wordpress">
 *      <span class="sk-inner-circle"></span>
 *    </div>
 *
 */
.sk-spinner-wordpress.sk-spinner {
  background-color: #1ab394;
  width: 30px;
  height: 30px;
  border-radius: 30px;
  position: relative;
  margin: 0 auto;
  -webkit-animation: sk-innerCircle 1s linear infinite;
  animation: sk-innerCircle 1s linear infinite;
}
.sk-spinner-wordpress .sk-inner-circle {
  display: block;
  background-color: #fff;
  width: 8px;
  height: 8px;
  position: absolute;
  border-radius: 8px;
  top: 5px;
  left: 5px;
}
@-webkit-keyframes sk-innerCircle {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes sk-innerCircle {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
/*
 *  Usage:
 *
 *    <div class="sk-spinner sk-spinner-fading-circle">
 *      <div class="sk-circle1 sk-circle"></div>
 *      <div class="sk-circle2 sk-circle"></div>
 *      <div class="sk-circle3 sk-circle"></div>
 *      <div class="sk-circle4 sk-circle"></div>
 *      <div class="sk-circle5 sk-circle"></div>
 *      <div class="sk-circle6 sk-circle"></div>
 *      <div class="sk-circle7 sk-circle"></div>
 *      <div class="sk-circle8 sk-circle"></div>
 *      <div class="sk-circle9 sk-circle"></div>
 *      <div class="sk-circle10 sk-circle"></div>
 *      <div class="sk-circle11 sk-circle"></div>
 *      <div class="sk-circle12 sk-circle"></div>
 *    </div>
 *
 */
.sk-spinner-fading-circle.sk-spinner {
  margin: 0 auto;
  width: 22px;
  height: 22px;
  position: relative;
}
.sk-spinner-fading-circle .sk-circle {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-spinner-fading-circle .sk-circle:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 18%;
  height: 18%;
  background-color: #1ab394;
  border-radius: 100%;
  -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out;
  animation: sk-circleFadeDelay 1.2s infinite ease-in-out;
  /* Prevent first frame from flickering when animation starts */
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.sk-spinner-fading-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  transform: rotate(30deg);
}
.sk-spinner-fading-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  transform: rotate(60deg);
}
.sk-spinner-fading-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.sk-spinner-fading-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  transform: rotate(120deg);
}
.sk-spinner-fading-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  transform: rotate(150deg);
}
.sk-spinner-fading-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.sk-spinner-fading-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  transform: rotate(210deg);
}
.sk-spinner-fading-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  transform: rotate(240deg);
}
.sk-spinner-fading-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.sk-spinner-fading-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  transform: rotate(300deg);
}
.sk-spinner-fading-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  transform: rotate(330deg);
}
.sk-spinner-fading-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
.sk-spinner-fading-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
.sk-spinner-fading-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
.sk-spinner-fading-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
.sk-spinner-fading-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}
.sk-spinner-fading-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}
.sk-spinner-fading-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
.sk-spinner-fading-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}
.sk-spinner-fading-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}
.sk-spinner-fading-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}
.sk-spinner-fading-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}
@-webkit-keyframes sk-circleFadeDelay {
  0%,
  39%,
  100% {
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
}
@keyframes sk-circleFadeDelay {
  0%,
  39%,
  100% {
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
}

/* theme conflig */
.theme-config {
  position: absolute;
  top: 90px;
  right: 0;
  overflow: hidden;
}
.theme-config-box {
  margin-right: -220px;
  position: relative;
  z-index: 2000;
  transition-duration: 0.8s;
}
.theme-config-box.show {
  margin-right: 0;
}
.spin-icon {
  background: #1ab394;
  position: absolute;
  padding: 7px 10px 7px 13px;
  border-radius: 20px 0 0 20px;
  font-size: 16px;
  top: 0;
  left: 0;
  width: 40px;
  color: #fff;
  cursor: pointer;
}
.skin-setttings {
  width: 220px;
  margin-left: 40px;
  background: #f3f3f4;
}
.skin-setttings .title {
  background: #efefef;
  text-align: center;
  text-transform: uppercase;
  font-weight: 600;
  display: block;
  padding: 10px 15px;
  font-size: 12px;
}
.setings-item {
  padding: 10px 30px;
}
.setings-item.skin {
  text-align: center;
}
.setings-item .switch {
  float: right;
}
.skin-name a {
  text-transform: uppercase;
}
.setings-item a {
  color: #fff;
}
.default-skin,
.blue-skin,
.ultra-skin,
.yellow-skin {
  text-align: center;
}
.default-skin {
  font-weight: 600;
  background: #283A49;
}
.default-skin:hover {
  background: #1e2e3d;
}
.blue-skin {
  font-weight: 600;
  background: url("patterns/header-profile-skin-1.png") repeat scroll 0 0;
}
.blue-skin:hover {
  background: #0d8ddb;
}
.yellow-skin {
  font-weight: 600;
  background: url("patterns/header-profile-skin-3.png") repeat scroll 0 100%;
}
.yellow-skin:hover {
  background: #ce8735;
}
.ultra-skin {
  padding: 20px 10px;
  font-weight: 600;
  background: url("patterns/3.png") repeat scroll 0 0;
}
.ultra-skin:hover {
  background: url("patterns/4.png") repeat scroll 0 0;
}
/*
 *
 *   SKIN 1 - INSPINIA - Responsive Admin Theme
 *   NAME - Blue light
 *
*/
.skin-1 .minimalize-styl-2 {
  margin: 14px 5px 5px 30px;
}
.skin-1 .navbar-top-links li:last-child {
  margin-right: 30px;
}
.skin-1.fixed-nav .minimalize-styl-2 {
  margin: 14px 5px 5px 15px;
}
.skin-1 .spin-icon {
  background: #0e9aef !important;
}
.skin-1 .nav-header {
  background: #0e9aef;
  background: url('patterns/header-profile-skin-1.png');
}
.skin-1.mini-navbar .nav-second-level {
  background: #3e495f;
}
.skin-1 .breadcrumb {
  background: transparent;
}
.skin-1 .page-heading {
  border: none;
}
.skin-1 .nav > li.active {
  background: #3a4459;
}
.skin-1 .nav > li > a {
  color: #9ea6b9;
}
.skin-1 .nav > li.active > a {
  color: #fff;
}
.skin-1 .navbar-minimalize {
  background: #0e9aef;
  border-color: #0e9aef;
}
body.skin-1 {
  background: #3e495f;
}
.skin-1 .navbar-static-top {
  background: #ffffff;
}
.skin-1 .dashboard-header {
  background: transparent;
  border-bottom: none !important;
  border-top: none;
  padding: 20px 30px 10px 30px;
}
.fixed-nav.skin-1 .navbar-fixed-top {
  background: #fff;
}
.skin-1 .wrapper-content {
  padding: 30px 15px;
}
.skin-1 #content-wrapper {
  background: #f4f6fa;
}
.skin-1 .ibox-title,
.skin-1 .ibox-content {
  border-width: 1px;
}
.skin-1 .ibox-content:last-child {
  border-style: solid solid solid solid;
}
.skin-1 .nav > li.active {
  border: none;
}
.skin-1 .nav-header {
  padding: 35px 25px 25px 25px;
}
.skin-1 .nav-header a.dropdown-toggle {
  color: #fff;
  margin-top: 10px;
}
.skin-1 .nav-header a.dropdown-toggle .text-muted {
  color: #fff;
  opacity: 0.8;
}
.skin-1 .profile-element {
  text-align: center;
}
.skin-1 .img-circle {
  border-radius: 5px;
}
.skin-1 .navbar-default .nav > li > a:hover,
.skin-1 .navbar-default .nav > li > a:focus {
  background: #3a4459;
  color: #fff;
}
.skin-1 .nav.nav-tabs > li.active > a {
  color: #555;
}
.skin-1 .nav.nav-tabs > li.active {
  background: transparent;
}
/*
 *
 *   SKIN 2 - INSPINIA - Responsive Admin Theme
 *   NAME - Inspinia Ultra
 *
*/
body.skin-2 {
  color: #565758 !important;
}
.skin-2 .minimalize-styl-2 {
  margin: 14px 5px 5px 25px;
}
.skin-2 .navbar-top-links li:last-child {
  margin-right: 25px;
}
.skin-2 .spin-icon {
  background: #23c6c8 !important;
}
.skin-2 .nav-header {
  background: #23c6c8;
  background: url('patterns/header-profile-skin-2.png');
}
.skin-2.mini-navbar .nav-second-level {
  background: #ededed;
}
.skin-2 .breadcrumb {
  background: transparent;
}
.skin-2.fixed-nav .minimalize-styl-2 {
  margin: 14px 5px 5px 15px;
}
.skin-2 .page-heading {
  border: none;
  background: rgba(255, 255, 255, 0.7);
}
.skin-2 .nav > li.active {
  background: #e0e0e0;
}
.skin-2 .logo-element {
  padding: 17px 0;
}
.skin-2 .nav > li > a,
.skin-2 .welcome-message {
  color: #edf6ff;
}
.skin-2 #top-search::-moz-placeholder {
  color: #edf6ff;
  opacity: 0.5;
}
.skin-2 #side-menu > li > a,
.skin-2 .nav.nav-second-level > li > a {
  color: #586b7d;
}
.skin-2 .nav > li.active > a {
  color: #213a53;
}
.skin-2.mini-navbar .nav-header {
  background: #213a53;
}
.skin-2 .navbar-minimalize {
  background: #23c6c8;
  border-color: #23c6c8;
}
.skin-2 .border-bottom {
  border-bottom: none !important;
}
.skin-2 #top-search {
  color: #fff;
}
body.skin-2 #wrapper {
  background-color: #ededed;
}
.skin-2 .navbar-static-top {
  background: #213a53;
}
.fixed-nav.skin-2 .navbar-fixed-top {
  background: #213a53;
  border-bottom: none !important;
}
.skin-2 .nav-header {
  padding: 30px 25px 30px 25px;
}
.skin-2 .dashboard-header {
  background: rgba(255, 255, 255, 0.4);
  border-bottom: none !important;
  border-top: none;
  padding: 20px 30px 20px 30px;
}
.skin-2 .wrapper-content {
  padding: 30px 15px;
}
.skin-2 .dashoard-1 .wrapper-content {
  padding: 0 30px 25px 30px;
}
.skin-2 .ibox-title {
  background: rgba(255, 255, 255, 0.7);
  border: none;
  margin-bottom: 1px;
}
.skin-2 .ibox-content {
  background: rgba(255, 255, 255, 0.4);
  border: none !important;
}
.skin-2 #content-wrapper {
  background: #f6f6f6;
  background: -webkit-radial-gradient(center, ellipse cover, #f6f6f6 20%, #d5d5d5 100%);
  background: -o-radial-gradient(center, ellipse cover, #f6f6f6 20%, #d5d5d5 100%);
  background: -ms-radial-gradient(center, ellipse cover, #f6f6f6 20%, #d5d5d5 100%);
  background: radial-gradient(ellipse at center, #f6f6f6 20%, #d5d5d5 100%);
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#f6f6f6, endColorstr=#d5d5d5)";
}
.skin-2 .ibox-title,
.skin-2 .ibox-content {
  border-width: 1px;
}
.skin-2 .ibox-content:last-child {
  border-style: solid solid solid solid;
}
.skin-2 .nav > li.active {
  border: none;
}
.skin-2 .nav-header a.dropdown-toggle {
  color: #edf6ff;
  margin-top: 10px;
}
.skin-2 .nav-header a.dropdown-toggle .text-muted {
  color: #edf6ff;
  opacity: 0.8;
}
.skin-2 .img-circle {
  border-radius: 10px;
}
.skin-2 .nav.navbar-top-links > li > a:hover,
.skin-2 .nav.navbar-top-links > li > a:focus {
  background: #1a2d41;
}
.skin-2 .navbar-default .nav > li > a:hover,
.skin-2 .navbar-default .nav > li > a:focus {
  background: #e0e0e0;
  color: #213a53;
}
.skin-2 .nav.nav-tabs > li.active > a {
  color: #555;
}
.skin-2 .nav.nav-tabs > li.active {
  background: transparent;
}
/*
 *
 *   SKIN 3 - INSPINIA - Responsive Admin Theme
 *   NAME - Yellow/purple
 *
*/
.skin-3 .minimalize-styl-2 {
  margin: 14px 5px 5px 30px;
}
.skin-3 .navbar-top-links li:last-child {
  margin-right: 30px;
}
.skin-3.fixed-nav .minimalize-styl-2 {
  margin: 14px 5px 5px 15px;
}
.skin-3 .spin-icon {
  background: #ecba52 !important;
}
body.boxed-layout.skin-3 #wrapper {
  background: #3e2c42;
}
.skin-3 .nav-header {
  background: #ecba52;
  background: url('patterns/header-profile-skin-3.png');
}
.skin-3.mini-navbar .nav-second-level {
  background: #3e2c42;
}
.skin-3 .breadcrumb {
  background: transparent;
}
.skin-3 .page-heading {
  border: none;
}
.skin-3 .nav > li.active {
  background: #38283c;
}
.fixed-nav.skin-3 .navbar-fixed-top {
  background: #fff;
}
.skin-3 .nav > li > a {
  color: #948b96;
}
.skin-3 .nav > li.active > a {
  color: #fff;
}
.skin-3 .navbar-minimalize {
  background: #ecba52;
  border-color: #ecba52;
}
body.skin-3 {
  background: #3e2c42;
}
.skin-3 .navbar-static-top {
  background: #ffffff;
}
.skin-3 .dashboard-header {
  background: transparent;
  border-bottom: none !important;
  border-top: none;
  padding: 20px 30px 10px 30px;
}
.skin-3 .wrapper-content {
  padding: 30px 15px;
}
.skin-3 #content-wrapper {
  background: #f4f6fa;
}
.skin-3 .ibox-title,
.skin-3 .ibox-content {
  border-width: 1px;
}
.skin-3 .ibox-content:last-child {
  border-style: solid solid solid solid;
}
.skin-3 .nav > li.active {
  border: none;
}
.skin-3 .nav-header {
  padding: 35px 25px 25px 25px;
}
.skin-3 .nav-header a.dropdown-toggle {
  color: #fff;
  margin-top: 10px;
}
.skin-3 .nav-header a.dropdown-toggle .text-muted {
  color: #fff;
  opacity: 0.8;
}
.skin-3 .profile-element {
  text-align: center;
}
.skin-3 .img-circle {
  border-radius: 5px;
}
.skin-3 .navbar-default .nav > li > a:hover,
.skin-3 .navbar-default .nav > li > a:focus {
  background: #38283c;
  color: #fff;
}
.skin-3 .nav.nav-tabs > li.active > a {
  color: #555;
}
.skin-3 .nav.nav-tabs > li.active {
  background: transparent;
}
.jd-innerWrap {
  border-bottom: 5px solid #e5e5e4;
  margin: 0 15px;
  padding: 0 0 5px;
}
.jd-innerWrap:after{
  content: "";
  display: block;
  clear: both;
}
.jd-innerContent{
  /*margin: 0 15px;*/
}
.nicescroll-rails.nicescroll-rails-vr{
  z-index: 9999 !important;
}
div#comparisonReport {
    clear: both;
    /* background: #f7f7f7; */
    padding: 10px 0;
}
div#comparisonReport .info-box{
  background: #f7f7f7;
}
.dfp-cont:after, .fb-cont:after {
    content: "";
    display: block;
    clear: both;
}
ul.nav.navbar-top-links.navbar-right {
    padding: 12px 0 0 0;
}
.profile-img {
    width: 30px;
    height: 30px;
    display: inline-block;
    border-radius: 100%;
    vertical-align: middle;
    border: solid 1px #C4C4C4;
}
.jd-navLinks {
    float: left;
    width: auto !important;
    margin: 0;
    padding: 10px 0 0 0;
}
.jd-navLinks li {
    width: auto !important;
    padding: 0;
    margin: 16px 20px 0 20px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    float: left;
    height: 30px;
    line-height: 30px;
    font-size: 14px;
    text-align: center;
    letter-spacing: 0.2px;
    background-position: 0px 20px;
    position: relative;
    text-transform: uppercase;
    list-style: none;
}
.jd-navLinks a:after {
    content: '';
    height: 2px;
    width: 0px;
    background: #4c4c4c;
    position: absolute;
    left: 0;
    bottom: -5px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}
.jd-navLinks a:hover, .jd-navLinks a.active{
    color: #85bb40;
}
.jd-navLinks a:hover:after, .jd-navLinks a.active:after {
    width: 18px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}
.powered-txt {
    position: absolute;
    right: 15px;
    top: 3px;
    font-family: 'DINBLACK';
    letter-spacing: 0.2px;
}
span.green-txt {
    color: #85bb40;
}
span.orange-txt {
    color: #f27337;
}
.jd-navLinks li a{
    color: #4c4c4c;
    background-color: #ffffff;
}
.white-bg1
{
background:#fff;
padding: 10px 10px;
margin-top: -7px;
}
.orange-bg{background: #fff;border: solid 1px #86bc25;border-radius: 0px;box-shadow: 0px 0px 2px #bbd545;}
.sidebar-collapse,#content-wrapper,#side-menu,.metismenu,.mini-navbar,.navbar-static-side
{
  transition:all .4s;
  -webkit-transition:all .4s;
}
.navbar-default
{
  height:800px;
}
.logo-animate{
  position:relative;
  top:-25px;
  animation:slide .5s forwards;
  animation-timing-function: linear;
  -webkit-animation: slide .5s forwards;
-webkit-animation-timing-function: linear;
}
keyframes slide {
100% {top:0; }
}
@-webkit-keyframes slide {
100% {top:0;}
}

nav.navbar.navbar-static-top{
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
}

/* Side Menu Overlay */

.sideMenu {
  background: #f7f7f7;
  position: fixed;
  width: 220px;
  left: -230px;
  top: 0;
  height: 100%;
  z-index: 99999;
  transition: 0.5s;
  overflow-x: hidden;
  box-shadow: -5px 0 5px -5px #333; */
    -webkit-box-shadow: 2px 0px 5px 0px rgba(0,0,0,0.4);
    -moz-box-shadow: 2px 0px 5px 0px rgba(0,0,0,0.4);
    box-shadow: 2px 0px 6px 0px rgba(0,0,0,0.3);
}

/* Position and style the close button (top right corner) */
.sideMenu .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.sideMenu .nav > li.active{
  border-left: 4px solid #f17336;
    background: rgba(0,0,0,0.03);
}
.expandMenu{
  left: 0px;
}
.sideMenu ul{
  padding: 10px 0 0 0;
}
.sideMenu li.active ul li a{
  text-transform: uppercase;
}
.sideMenu .nav-second-level li a{
  padding-left: 25px;
  font-family: 'Lato-Regular' !important;
}
.sideMenu li a {
    font-family: 'Lato-Regular' !important;
    font-weight: normal;
    letter-spacing: 0.5px;
    font-size: 12px;
    outline: none;
    text-transform: uppercase;
    line-height: 20px;
    transition: all 0.5s;
    color: #676767;
}
.sideMenu li a:hover, .sideMenu li a:focus{
  background: none;
}

.sideMenu li:hover a {
    color: #80c142 !important;
}
.carousel-block .carousel-inner {
  max-height:260px;
  text-align:center;
}
.carousel-block iframe {
    border-color: #eee;
    width: 100%;
    margin-bottom: 45px;
  border-width:1px;
  }
.carousel-block .carousel-indicators {
  bottom:auto;
  top:-25px;
}
.carousel-block .carousel-indicators li {
    border: 1px solid #80c142;
}
.carousel-block  .carousel-indicators .active {
  background:#80c142;
}
.carousel-block  .carousel-control {
  width:26px;
  height:26px;
  top:-29px;
  background-image: none;
  color: #80c142;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,0);
    filter: alpha(opacity=80);
    opacity: .8;
  line-height: 27px;
  border-radius: 3px;
}
.carousel-block  .carousel-control:hover {
   filter: alpha(opacity=100);
  opacity:1;
  background-color:rgba(0, 0, 0, 0.05);
}
.info-box-content #preloader {
    position: absolute;
    display: inline-block;
    left: auto;
    right: auto;
    bottom: 22px;
    top: auto;
    width: 115px;
    height: 75px;
    text-align: center;
    background: none;
  z-index: 2;
}
.preloader-campaignlist {
  position:absolute;
  z-index:55;
  width:125px;
  height:125px;
}
.info-box-content .loader {
  border-width: 2px;
    width: 30px;
    height: 30px;
  display:inline-block;
}
/* Clock Animation */

/* CLOCK */
#clock {
position: relative;
width: 36px;
height: 36px;
background: url(img/clock_face.png) no-repeat;
list-style: none;
}

#sec, #min, #hour {
position: absolute;
width: 2px;
height: 36px;
top: 0px;
left: 17px;
}

#sec {
background: url(img/sechand.png);
z-index: 3;
}

#min {
background: url(img/minhand.png);
z-index: 2;
}

#hour {
background: url(img/hourhand.png);
z-index: 1;
}
  .navRightWrap {
  padding-top:18px;
  float:right;
  font-size:12px;
  font-family:"Lato-Regular"; 
}

.navbar-left{
  padding-top:18px;
}

.navRightWrap .userWrap {
  color:#f27337;
  width:175px;
  float:right;
  padding-top:22px;
  font-size:14px;
}
.navRightWrap .timeZoneWrap {
  float:left;
  height:36px;
  padding-left:42px;
  font-size:9px;
  margin-right:30px;
  position:relative;
}
.clockAnimation {
  width:36px;
  height:36px;
  position:absolute;
  background:url(img/time_icon.png) no-repeat;
  left:0px;
  top:0px;
}
.activeclock {
  padding-top:2px;
}
.activeclock em {
  display:block;
}
.clockDropdown {
  position:absolute;
  width:75px;
  right:0px;
  top:47px;
  background:#fff;
  z-index:1;
  -webkit-box-shadow: 0 2px 2px 1px rgba(0,0,0,0.1);
  box-shadow: 0 2px 2px 1px rgba(0,0,0,0.1);
  font-family:"Lato-Regular" !important;
  display:none;
}
.clockDropdown span {
  display:block;
  height: 30px;
  line-height: 30px;
  padding: 0 10px;
}

.navRightWrap .userWrap span {
  width: 0px; 
  height: 0px; 
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left:5px solid #6c7071;
  border-right:0px; 
  float:right;
  margin-top:4px;
  margin-left:10px; 
  cursor:pointer;
}
.navRightWrap .timeZoneWrap span.arrow {
  width: 0px; 
  height: 0px; 
  border-right: 5px solid transparent;
  border-left: 5px solid transparent; 
  border-top:5px solid #6c7071;
  border-bottom:0px; 
  display:block;
  margin-left:10px;
  margin-top:7px;
  cursor:pointer;
}
.navRightWrap .timeZoneWrap span.arrow.active {
  border-bottom:5px solid #6c7071;
  border-top:0px; 
}

.displayClass
{
  display : none;
}

span.nav-logo {
    margin: 9px 30px 0 0;
    display: inline-block;
    vertical-align: middle;
    float: left;
}
span.nav-logo img{
  height: 45px;
}
.overview-content .tab-content .ibox-title{
  border: none;
}
.overview-content .nav-tabs-custom ul{
  margin-bottom: 0px;
}
.filter-block {
    background: #ffff;
    padding: 7px 0;
    margin-left:15px;
    margin-top:68px;
    
}
div#reportrange, div#order_report_range, #camp_report_range {
    border-bottom: 1px solid #babdba;
    padding: 10px 0;
    width: 100%;
    cursor: pointer;
}
div#reportrange span, div#order_report_range span, #camp_report_range span {
  position:relative;
  top:2px;
  text-transform: uppercase;
}
div#reportrange b.caret,div#order_report_range b.caret, #camp_report_range b.caret{
  float: right;
  background: url('img/select_right.png') no-repeat bottom;
  border: none;
  width: 14px;
    height: 8px;
    margin: 7px 0 0 0;
}

/* Plugins */
.select2-container--default .select2-selection--single .select2-selection__arrow {
  background: url('img/select_right.png') no-repeat bottom;
    top: 16px;
    width: 14px;
    height: 8px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b{
  display: none;
}
.select2-container .select2-selection--single .select2-selection__rendered{
  padding-left: 0;
  font-size: 11px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered{
  color: #676767;
}
div#selectedRegions .label-default, div#divForFilterValues .label-default{
  background: #ebebea;
  font-family: 'Lato-Regular';
  padding: 0 10px;
  border-radius: 3px;
  font-size: 11px;
  line-height: 28px;
  margin: 0 5px 0 0;
  display: inline-block;
}
div#selectedRegions .label-default a, div#divForFilterValues .label-default a{
  color: #4b4b4b !important;
  padding: 0 0 0 10px;
}
div#selectedRegions .label-default a img, div#divForFilterValues .label-default a img{
  margin: 0 0 0 10px;
}
.select2-container--default .select2-search--dropdown .select2-search__field{
  outline: none;
}
.select2-container--default .select2-results__option--highlighted[aria-selected]{
  background: #f17336;
}
.select2-dropdown {
    background-color: white;
    border: none;
    border-radius: 0px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051;
    font-family: 'Lato-Regular' !important;
    font-size: 12px;
    color: #676767;
    -webkit-box-shadow: 0 3px 8px rgba(0,0,0,0.175);
    box-shadow: 0 3px 8px rgba(0,0,0,0.175);
}
.select2-results__option{
  transition: 0.5s;
  color: #676767;
}
.select2-container--default .select2-results__option[aria-selected=true]{
  background: #f7f7f7;
  color: #676767;
}


/* Infobox */

.info-box {
    display: block;
    min-height: 90px;
    background: #f7f7f7;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
}
.bg-green{
    background-color: #80c142 !important;
}

.bg-fb {
  background: #3b5998 !important;
}
.bg-light-grey{
  background: rgba(0,0,0,0.05) !important;
}
.bg-white{
  background: #fff !important;
}
.info-box-content {
    padding: 5px 10px;
    margin-left: 90px;
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}
.info-box-icon img{
  /*height: 50px;*/
  max-width: 100%;
  vertical-align: middle;
}
.info-box-text {
    text-transform: uppercase;
    font-family: 'Trebuchet MS' !important;
    letter-spacing: 0.5px;
    font-size: 14px;
    color: #676767;
}
body .text-trans-none {
  text-transform: none;
}
.progress-description, .info-box-text {
    display: block;
    font-size: 11px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.info-box-number {
    display: block;
    font-family: 'Trebuchet MS'. sans-serif;
    font-size: 13px;
    margin: 5px 0 0 0;
    letter-spacing:0 !important;
}

#comparisonReport h3{
  background: #f7f7f7;
  padding: 10px 0;
  margin: 0 ;
  font-family: 'Lato-Bold';
  font-size: 14px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  color: #676767;
}
.source-nm{
  background: #f7f7f7;
  display: block;
  min-height: 90px;
  width: 100%;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  border-radius: 2px;
  margin-bottom: 15px;
  line-height: 90px;
}
#comparisonReport .bg-dfp{
  background: #80c142 !important;
  line-height: 85px !important;
}
#comparisonReport .dfp-cont a{
  color: #80c142 !important;
}
#comparisonReport .bg-fb{
  background: #3b5998 !important;
  line-height: 85px !important;
}
#comparisonReport .fb-cont a{
  color: #3b5998 !important;
}
h1#graphTitle, .graphical-report h1{
    margin: 8px 0 0 20px;
    font-family: 'Trebuchet MS', sans-serif;
    font-weight: bold;
    font-weight: bolder;
    font-size: 17px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-block;
}
.graphical-report h1{
  margin: 20px 0 25px 0;
}
.hidden-ibox{
  min-height: 0 !important;
}
.complexview .ibox-title{
  padding: 0;
}
.ibox.float-e-margins{
  margin: 0;
}
.horz-dvdr{
  height: 1px;
  width: 100%;
  background: #ebebeb;
  margin: 10px 0;
}
.order-summary .ibox-title h5{
    font-family: 'Lato-Bold';
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block !important;
    background: #f7f7f7;
    float: none;
    padding: 10px;
    margin: 0;
}
div#reg_report {
    margin: 10px 0 0 0;
}
tbody#regional_report_tbody {
    font-family: 'Lato-Regular';
}
select#target, span.select2.select2-container.select2-container--default{
  width: 100% !important;
}
.html5buttons .btn-default{
  background: #ebebea;
  border:none !important;
  margin: 0 0 0 5px !important;
  display: inline-block;
}
.html5buttons .btn-default:hover{
  background: #bdd646;
}
/* Preloader */

#preloader, #preloader2  {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  z-index: 99999;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.loader,
.loader:after {
  border-radius: 50%;
  width: 70px;
  height: 70px;
}
.loader {
  margin: 20% auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  border-top: 5px solid rgba(188,214,69, 0.2);
  border-right: 5px solid rgba(188,214,69, 0.2);
  border-bottom:5px solid rgba(188,214,69, 0.2);
  border-left: 5px solid #bcd645;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 1.1s infinite linear;
  overflow: hidden;
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

div#line-item{
  overflow: scroll;
    height: 300px;
}
table#regional_report tr{ 
  transition: all 0.5s;
  cursor: default;
}
table#regional_report td, table#regional_report th{
  outline: none;
}
table#regional_report th {
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.pagination>li:first-child>a, .pagination>li:first-child>span, .pagination>li:last-child>a, .pagination>li:last-child>span{
  border-radius: 0;
}
.pagination li  a{
  outline: none;
  transition: all 0.5s;
  font-family: 'Lato-Regular';
  color: #676767;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
   color: #676767;
  background-color: #bcd645;
}
/*.row.five-col .col-lg-2, .row.five-col .col-md-2{
  width: 20%;
}*/
.row.five-col .progress-description, .row.five-col .info-box-text{
  white-space: normal;
  text-overflow: unset;
  overflow: unset;
}
.row.five-col .info-box-number{
    position: absolute;
    bottom: 30px;
}
.row.five-col .info-box-icon{
  line-height: 85px;
}
h3.content-head {
    font-size: 14px;
    font-family: 'Lato-Bold';
    color: #80c142;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 17px 0 12px 0;
}
h3.content-head span {
    color: #676767;
    text-transform: none;
    margin: 0 0 0 5px;
}
/*.headcol{
  position:absolute !important; 
  width:100px !important; 
  left:0 !important;
  top:auto;background: red !important;
  border-right: 0px none black; 
  border-top-width:3px; 
  margin-top:-3px; 
}*/
.line-item-cont1 .ibox-title{
 /* background-color: #f0f0f0 !important;*/
}
.line-item-cont1 h4 {
    font-size: 14px;
    text-transform: uppercase;
    padding: 2px 15px;
}
.line-item-cont1 .ibox-content{
    overflow-y: auto;
    padding: 0 0 15px 15px;
    border:1px;
}
.campaign-name a{
  margin: 5px 2px 0 5px;
  display: inline-block;
}
.campaign-name a:hover{
  opacity: 0.7;
}
.campaign-name .btn-icon{
  margin: 11px 0 0 0;
}
table#line-item-report th {
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: 'Lato-Bold';
}
table#line-item-report th:nth-child(2), table#line-item-report th:nth-child(3), table#line-item-report th:nth-child(4), table#line-item-report th:nth-child(5), table#line-item-report th:nth-child(6){
  text-align: right;
}
table#line-item-report td:nth-child(2), table#line-item-report td:nth-child(3),table#line-item-report td:nth-child(4),table#line-item-report td:nth-child(5),table#line-item-report td:nth-child(6){
  text-align: right;
  padding-right: 30px;
}
table#line-item-report td {
    font-family: 'Lato-Regular';
}
.campaign-name .dataTables_wrapper{
  padding-bottom: 0;
}
div#reg_report{
  margin: 0 0 0 0 !important;
}
div#overviewReport .info-box-icon{
  line-height: 83px !important;
}
div#ascrail2000-hr {
  display: none !important;
}
table td{
  font-family: "Trebuchet MS", sans-serif !important;
}
table thead th{
    background-color: #F5F5F6 !important;
}
.filter-menu{
  width: 40px;
  height: 40px;
  background: url('img/filter-icn.jpg') no-repeat center center;
}
.filter-menu.active{
  background: url('img/filter-icn-active.jpg') no-repeat center center;
}
/* Checkbox Styles */

.radio-opt, .checkbox {
  cursor:pointer; 
}

.form-cont .radio-opt, .form-cont .button, .form-cont .checkbox, .form-cont .select .arrow, .form-cont .switch>label, .form-cont .ui-slider .ui-slider-handle {
  -webkit-touch-callout:none;
  -webkit-user-select:none;
  -khtml-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  user-select:none
}
.form-cont .radio-opt, .form-cont .button, .form-cont .tooltip, .form-cont .checkbox, .form-cont .gui-input, .form-cont .notification, .form-cont .gui-textarea, .form-cont .select>select, .form-cont .select-multiple select {
-webkit-transition:all .5s ease-in-out;
-moz-transition:all .5s ease-in-out;
-ms-transition:all .5s ease-in-out;
-o-transition:all .5s ease-in-out;
transition:all .5s ease-in-out;
  -webkit-border-radius:0;
  -moz-border-radius:0;
  -ms-border-radius:0;
  -o-border-radius:0;
  border-radius:0;
  outline:0
}

.form-cont .checkbox, .form-cont .radio-opt {
  position: relative;
  margin-right: 0;
  background: #fff;
  display: inline-block;
  border: 1px solid #cfcfcf;
  height: 15px;
  width: 15px;
  top: 3px;
  right: -15px;
  margin: 0;
  float: right;
  font-family: 'Lato-Regular';
  font-weight: normal;
}
label.field.option.block {
  font-family: 'Lato-Regular';
  font-size: 12px;
  font-weight: normal;
  letter-spacing: 0.5px;
  margin: 0 2px 10px 0;
  line-height: 20px;
  cursor: pointer;
}
ul.dropdown-menu.dropdown-menu-large li{
  text-transform: uppercase;
  color: #4b4b4b;
  font-family: 'Lato-Bold';
  letter-spacing: 0.5px;
  font-size: 11px;
  line-height: 30px;
}
ul.dropdown-menu.dropdown-menu-large li:hover,ul.dropdown-menu.dropdown-menu-large li.active{
  background: #f7f7f7;
}
.form-cont .checkbox:hover, .form-cont .checkbox:focus{
    border:1px solid #cfcfcf;

}
.form-cont .checkbox:before, .form-cont .radio-opt:before {
  content:'';
  display:none;
}
.form-cont input:checked+.checkbox:before, .form-cont input:checked+.radio-opt:before {
  display:block;
}
.form-cont .checkbox-option input{
  display: none;
}
.column-filter .checkbox{
  float: right !important;
}
.form-cont .checkbox:before {
  position:absolute;
  top: 3px;
    right: 0px;
    width: 13px;
    height: 6px;
  border:solid #bed746;
  border-width:0 0 2px 2px;
  -webkit-transform:rotate(-40deg);
  -moz-transform:rotate(-40deg);
  -ms-transform:rotate(-40deg);
  -o-transform:rotate(-40deg);
  transform:rotate(-40deg);
  -webkit-animation: fadein 0.5s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 0.50.5s; /* Firefox < 16 */
        -ms-animation: fadein 0.5s; /* Internet Explorer */
         -o-animation: fadein 0.5s; /* Opera < 12.1 */
            animation: fadein 0.5s;
}
.form-cont input:checked+.radio-opt {
  border:2px solid #bed746;
}
.form-cont input:checked+.checkbox{
  border: none;
}
.form-cont .radio-opt {
  -webkit-border-radius:20px;
  -moz-border-radius:20px;
  -o-border-radius:20px;
  border-radius:20px;
  padding:0;
  vertical-align:middle;
  margin:0 5px 10px 0;
}
.form-cont .radio-opt:before {
  margin:4px;
  width:6px;
  height:6px;
  background:#bed746;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  -o-border-radius:10px;
  border-radius:10px
}
.form-cont input:hover+.checkbox, .form-cont input:hover+.radio-opt {
  border-color:#bed746
}
.form-cont input:focus+.checkbox, .form-cont input:focus+.radio-opt {
  border-color:#bed746
}
.form-cont input:focus+.radio-opt:before {
  background:#bed746
}
.form-cont input:focus+.checkbox:before {
  border-color:#bed746
}
.form-cont .state-success .gui-input, .form-cont .state-success .gui-textarea, .form-cont .state-success.select>select, .form-cont .state-success.select-multiple>select, .form-cont .state-success input:hover+.checkbox, .form-cont .state-success input:hover+.radio, .form-cont .state-success input:focus+.checkbox, .form-cont .state-success input:focus+.radio-opt, .form-cont .state-success .checkbox, .form-cont .state-success .radio-opt {
  background:#f0fee9;
  border-color:#a5d491
}
.form-cont .button[disabled], .form-cont .state-disabled .button, .form-cont input[disabled]+.radio-opt, .form-cont input[disabled]+.checkbox, .form-cont .switch>input[disabled]+label {
  cursor:default;
  opacity:.5
}
 a.dropdown-toggle {
    padding: 0 !important;
  }
  ul.dropdown-menu.dropdown-menu-large{
    padding: 0 0 40px 0;
    border: none;
    border-radius: 0;
    width: 250px;
  }
  ul.dropdown-menu.dropdown-menu-large li{
    width: 100%;
    padding: 5px 10px;
    list-style: none;
    cursor: pointer;
  }
  button#applyFilters {
      position: absolute;
      bottom: -5px;
      width: 100%;
  }
.displayClass{
  display:none
}

.scrollable-menu {
    height: auto;
    max-height: 100px;
    overflow-y: auto;
    margin: 0;
    padding: 0;
    width: 100%;
}
span.checkbox-label{
  word-break: break-all;
  width: 200px;
  display: block;
  font-size: 11px;
}
.scrollable-menu label{
  display: block;
}
.scrollable-menu li{
  padding: 0 !important;
}
.form-cont input[type="checkbox"]{
  float: right;
}
.menu-btn {
  float: right;
  background: url(img/select_right.png) no-repeat center;
  border: none;
  outline: none;
}
.menu-btn.active{
  background: url(img/select_right_up.png) no-repeat center;
}
.sum-five-col .col-xs-2, .campain-row .col-xs-2, .campain2-row  .col-xs-2 {width:20%;}
.sum-five-col .col-xs-4, .campain-row .col-xs-4, .campain2-row  .col-xs-4 {width:40%;}

body h2.dashboard-title {
    border-bottom: 1px solid rgba(0, 0, 0, 0.005);
    text-align: left;
    margin: 5px 0 10px 0;
    padding: 0 0 5px;
}
body h2.facebook-title {
  margin:25px 0 10px;
}
.bg-gray {
    /*background: #fdfdfd;
    border-right: 1px solid #fdfdfd;
    border-left: 1px solid #fdfdfd;*/
    padding-top: 2px;
  padding-bottom: 2px;
}
.campain-row h3, .adserve-first-block h3, .adserve-second-block h3 {
  font-size:12px;
  text-transform: uppercase;
  color:#999;
  margin-bottom: 4px;
}
.campain-row p, .adserve-first-block p, .adserve-second-block p {
  font-size:14px;
  word-wrap: break-word;
}
#camp_report_range {
  margin:10px 5px;
}
.title-adserver {
    font-size: 11px;
    text-transform: uppercase;
    color: #999;
    margin-top: 14px;
    margin-bottom: 5px;
}

.adserver-block {
    margin: 10px 0;
}
.adserve-list .info-box-number {
    position: absolute;
    bottom: 22px;
}
.adserve-first-block, .adserve-second-block {
  margin:10px 0;
}
.adserve-first-block {
    display: inline-block;
    float: left;
}
.adserve-end-date {
  /*border-left:1px solid #f7f7f7;*/
}
ul#advTab {
    list-style-type: none;
    color: #4c4c4c;
    padding: 0;
    margin: 15px 0 0;
    display: block;
}
ul#advTab li {
    display: inline-block;
    padding: 3px 0 2px 0;
}

ul#advTab li:first-child {
  margin-right:15px;
  margin-left: 0px;
}

#advTab li a:hover, #advTab li a.active, #advTab li a:active {
    color: #85bb40;
}
#infoWrap .campain-row {
  margin-top:25px;
}
#infoWrap .adserve-first-block, #infoWrap .adserve-second-block {
  margin:0;
}
#infoWrap .campain-row {
    margin-top: 25px;
    margin-bottom: 0px;
}

.adserve-list .info-box-text {
  margin-top: 4px;
}
.adserve-list  .info-box {
  min-height:52px;
}
.adserve-list .info-box-icon {
    height: 52px;
    width: 65px;
    line-height: 52px;
    font-size: 0;
}
.adserve-list .info-box-icon img {
    height: 35px;
    max-width: 100%;
    vertical-align: middle;
}
.adserve-list .info-box-content {
  margin-left: 62px;
}
.campaign-view-top {
   /*background: #fefefe;*/
    border-bottom: 1px solid #eee;
}
#creativeWrap {
  margin-top:25px;
}
.adserver-block img {
    margin: 10px;
    margin-left: 0;
    margin-top: 2px;
    margin-bottom: 0;
    width: 90px;
}
.adserver-block h3 {
    float: none !important;
    clear: both;
    margin-top: 5px;
    font-size: 12px;
}
.adserver-block.fb-img img {
  width: 85px;
}
.carousel-block  .carousel-control {
  display:none;
}
.carousel-block .carousel-indicators {
  display:none;
}
.container{
  width: 98%;
  padding-left:15px;
  padding-right:15px;
  margin: 0;
}
div#selectedRegions{
  margin-top: 5px;
}
.ranges li{
  padding: 7px 12px !important;
}
.msgtop{
  font-family: 'lato-regular';
    font-weight: normal;
    font-size: 12px;
    color: #888;
    margin-top: 35px;
    font-style: italic;
    padding: 0 15px;
}
.select2-selection__rendered{
  text-transform: uppercase;
}
li.select2-results__option{
  text-transform: uppercase;
}
#yii-debug-toolbar{
  display: none !important;
}
.daterangepicker_input input{
  text-transform: uppercase;
}
.dt-body-right, .dt-head-right{
  text-align: right;
}
table th {
  text-transform: uppercase !important;
}
#advTable th:nth-child(2), #advTable th:nth-child(3), #advTable th:nth-child(4), #advTable th:nth-child(5),
#advTable td:nth-child(2), #advTable td:nth-child(3), #advTable td:nth-child(4), #advTable td:nth-child(5){
  text-align: right;
  white-space: nowrap;
}
#advTable td:nth-child(2), #advTable td:nth-child(3), #advTable td:nth-child(4), #advTable td:nth-child(5){
    padding-right: 30px;
}
#advTableWebsites th:nth-child(2), #advTableWebsites th:nth-child(3), #advTableWebsites th:nth-child(4), #advTableWebsites th:nth-child(5),
#advTableWebsites td:nth-child(2), #advTableWebsites td:nth-child(3), #advTableWebsites td:nth-child(4), #advTableWebsites td:nth-child(5){
  text-align: right;
  white-space: nowrap;
}
#advTableWebsites td:nth-child(2), #advTableWebsites td:nth-child(3), #advTableWebsites td:nth-child(4), #advTableWebsites td:nth-child(5){
    padding-right: 30px;
}
#advTableStandardCampaign th:nth-child(2), #advTableStandardCampaign th:nth-child(3), #advTableStandardCampaign th:nth-child(4), #advTableStandardCampaign th:nth-child(5),
#advTableStandardCampaign td:nth-child(2), #advTableStandardCampaign td:nth-child(3), #advTableStandardCampaign td:nth-child(4), #advTableStandardCampaign td:nth-child(5){
  text-align: right;
  white-space: nowrap;
}
#advTableStandardCampaign td:nth-child(2), #advTableStandardCampaign td:nth-child(3), #advTableStandardCampaign td:nth-child(4), #advTableStandardCampaign td:nth-child(5){
    padding-right: 30px;
}
#advTableSponsoredCampaign th:nth-child(2), #advTableSponsoredCampaign th:nth-child(3), #advTableSponsoredCampaign th:nth-child(4), #advTableSponsoredCampaign th:nth-child(5),
#advTableSponsoredCampaign td:nth-child(2), #advTableSponsoredCampaign td:nth-child(3), #advTableSponsoredCampaign td:nth-child(4), #advTableSponsoredCampaign td:nth-child(5){
  text-align: right;
  white-space: nowrap;
}
#advTableSponsoredCampaign td:nth-child(2), #advTableSponsoredCampaign td:nth-child(3), #advTableSponsoredCampaign td:nth-child(4), #advTableSponsoredCampaign td:nth-child(5){
    padding-right: 30px;
}
#advTableHouseCampaign th:nth-child(2), #advTableHouseCampaign th:nth-child(3), #advTableHouseCampaign th:nth-child(4), #advTableHouseCampaign th:nth-child(5),
#advTableHouseCampaign td:nth-child(2), #advTableHouseCampaign td:nth-child(3), #advTableHouseCampaign td:nth-child(4), #advTableHouseCampaign td:nth-child(5){
  text-align: right;
  white-space: nowrap;
}
#advTableHouseCampaign td:nth-child(2), #advTableHouseCampaign td:nth-child(3), #advTableHouseCampaign td:nth-child(4), #advTableHouseCampaign td:nth-child(5){
    padding-right: 30px;
}
#regional_report td:nth-child(4), #regional_report td:nth-child(5), #regional_report td:nth-child(6), #regional_report td:nth-child(7), #regional_report td:nth-child(8),
#regional_report th:nth-child(4), #regional_report th:nth-child(5), #regional_report th:nth-child(6), #regional_report th:nth-child(7), #regional_report th:nth-child(8){
    padding-right: 30px;
  white-space: nowrap;
}
.ibox.float-e-margins{
  min-height: 15px;
}
.adserver-block .fb-img img{
  width: 69px;
}
.bg-gray p{
  font-size: 12px;
}
#camp_list_div{
  padding: 0 15px;
}



html, body {
  height: 100%;
  margin: 0;
}
.wrap {
  min-height: 100%;

  /* Equal to height of footer */
  /* But also accounting for potential margin-bottom of last child */
  margin-bottom: -38px;
}
.footer,
.push {
  height: 38px;
}





#pdfDiv{
  margin-top: 30px;
}
.tag.label.label-default{
  text-transform: uppercase;
}
.bg-gray p{
  margin-bottom: 9px;
}
.bg-gray p{
  margin-top: 5px;
}
.facebook-infowrap .info-box{
  margin-top: 20px;
}
.right-links a{
  display: inline-block;
  color:#f17336;
    margin-left: 5px;
}
.right-links a:hover{
  color:#85bb40;
}
.right-links a .fa{
  font-size: 23px;
}
.sweet-alert button{
  border-radius: 2px !important; 
}
table#regional_report td:nth-child(1){
  white-space: nowrap;
}


.progress{
    border-radius: 2px;
    background: #f5f5f5;
    border-bottom: 1px solid #eee;
    height: 30px;
}
.progress-bar-analytics{
    background-color: #85bb40;
    white-space: nowrap;
    text-shadow: 0px 0px 3px #828282;
    text-indent: 7px;
    font-family: "Trebuchet MS", sans-serif;
    font-size: 13px;
    padding-top: 4px;
}
.target{
    display: inline-block;
    height: 22px;
    font-size: 13px;
    margin-left: 12px;
    margin-top: 8px;
}
#d_linitems{
  padding-top: 15px;
}
.infowrap-block{
    border-left: 2px solid #ddd;
    padding-left: 15px;
    margin-top: 30px;
    margin-bottom: 15px;
  }
.dataTables_wrapper label{
    color: #676a6c;
  }
.dataTables_wrapper select, .dataTables_wrapper input{
  width: auto !important;
  font-size: 12px;
  background-color: #fff;
  background-image: none;
  border: 1px solid #e5e6e7;
  border-radius: 1px;
  color: inherit;
  display: block;
  padding: 6px 0;
  transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
  }
.dataTables_wrapper input{
    margin-left: 0.5em;
    padding: 6px 12px;
    border-color: #c5bebe;
    outline: none;
    }
.dataTables_wrapper select:focus, .dataTables_wrapper select:active, .dataTables_wrapper input:focus {
    border-color: #c5bebe;
}
table.dataTable thead th, table.dataTable thead td, table.dataTable.no-footer{
    border-bottom: 1px solid #ddd;
}
.dataTables_info{
  float: none !important;
}
table.dataTable{
    clear: both;
    margin-top: 6px;
    margin-bottom: 6px;
    max-width: none;
    }

.dataTables_wrapper .dataTables_paginate .paginate_button, .dataTables_wrapper .dataTables_paginate span.ellipsis {
    background-color: #fff;
    border: 1px solid #DDDDDD;
    color: inherit;
    float: left;
    line-height: 1.42857;
    margin-left: -1px;
    padding: 4px 10px;
    position: relative;
    text-decoration: none;
    border-radius: 0;
    color: #676767 !important;
  }
.dataTables_wrapper .dataTables_paginate .paginate_button.previous {
    margin-left: 0;
  }
.dataTables_wrapper .dataTables_paginate .paginate_button:focus, .dataTables_wrapper .dataTables_paginate .paginate_button:hover, .dataTables_wrapper .dataTables_paginate .paginate_button:active {
    z-index: 2;
    color: #888 !important;
    background: #eee;
    border-color: #ddd;
    box-shadow: none;
  }
.dataTables_wrapper .dataTables_paginate span.ellipsis {
    cursor: not-allowed;
  }
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.current:focus {
    background: #bcd645;
    cursor: default;
    border: 1px transparent solid;
  }
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:focus {
    color: #777 !important;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
  }
  .dataTables_wrapper .dataTables_paginate{
    float: left;
  }
  #regional_report_length select:focus, #regional_report_length select:active{
    outline: none;
  }
    </style>


</head>
<body>
        
        
<div class="wrap">
   

    <div class="container">
                        


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>2adpro</title>



<style>
displayClass {
	display: none;
}
.tooltip {
	background: rgba(0,0,0,0.7);
	color: #fff;
	padding: 10px;
	border-radius: 5px;
	font-family: 'Lato-Regular';
	font-weight: normal;
}
#advTab li{  
    width: auto !important;
    padding: 0;
    margin: 16px 20px 0 20px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    float: left;
    height: 30px;
    line-height: 30px;
    font-size: 14px;
    text-align: center;
    letter-spacing: 0.2px;
    background-position: 0px 20px;
    position: relative;
    text-transform: uppercase;
    list-style: none;
}
#advTab li a {
    color: #4c4c4c;
}
#advTab li:hover a {
   color:#80c142;
}
#advTab li a:after {
    content: '';
    height: 2px;
    width: 0px;
    background: #4c4c4c;
    position: absolute;
    left: 0;
    bottom: -5px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}
#advTab li a:hover:after, #advTab li a.active:after {
    width: 18px;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}
</style>



<!-- Preloader -->
<div id="preloader" class="toppreloader" style="display: none;"> 
  <!--<div id="status">asdsad</div>-->
  <div class="loader">Loading...</div>
</div>
<div id="content-wrapper" class="white-bg">
<div class="row">

</div>
<div class="wrapper wrapper-content animated fadeInRight graphical-report mt10">
 
  <div id="pdfDiv" class="jd-innerContent">
    <div class="row campaign-name">
      <div class="col-xs-8">
       
        <h1>Campaign Info <!--span id="orderNameId"></span--> </h1>
      </div>
      <!--<div class="col-lg-4 text-right pr35">
				<a onclick="pdfGenerator()" ><img src="../img/pdf1.png" alt="Download pdf" /></a>
				<a onclick="viewMailmodal()"><img src="../img/mail1.png" alt="Download pdf" /></a>
			</div>--> 
    </div>
    <div class="clearfix campaign-view-top">
      <div class="row campain-row">
        <div class="col-xs-2">
          <div class="bg-gray">
            <h3>Tracking No</h3>
            <p id="trackingno"><?php echo $order_info->trackingno;?></p>
          </div>
        </div>
        <div class="col-xs-2">
          <div class="bg-gray">
            <h3>Campaign Name</h3>
            <p id="ordername"><?php echo $order_info->ordername;?></p>
          </div>
        </div>
        <div class="col-xs-2">
          <div class="bg-gray">
            <h3>Advertiser</h3>
            <p id="adv"><?php echo $order_info->adv;?></p>
          </div>
        </div>
        <div class="col-xs-2">
          <div class="bg-gray">
            <h3>Sales Rep</h3>
            <p id="salesrep"> <?php echo $order_info->salesrep;?> </p>
          </div>
        </div>
      </div> 
	  
      <div class="row campain2-row">
        <div class="col-xs-2">
          <div class="bg-gray adserve-first-block">
            <h3>Start Date</h3>
            <p id="ostartdate"> <?php echo date("d-M-Y", strtotime($order_info->startdate)) ;?> </p>
          </div>
          
        </div>
		<div class="col-xs-2">
		<div class="bg-gray adserve-first-block adserve-end-date">
            <h3>End Date</h3>
            <p id="oenddate"> <?php   echo date("d-M-Y", strtotime($order_info->enddate)) ;?> </p>
          </div>
		</div>
        <div class="col-xs-2">
          <div class="bg-gray adserve-second-block">
            <h3>Region</h3>
            <p id="region_name"><?php echo $order_info->region;?></p>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="bg-gray clearfix adserver-block">
            <h3 class="title-adserver pull-left">Ad servers</h3>
            <div class="pull-left dfp-img" style=""><img src="../img/title-dfp.png" alt=""></div>
            <div class="pull-left fb-img"><img src="../img/title-facebook.png" alt=""></div>
          </div>
        </div>
      </div>	  
	  
      <div class="row">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <div class="ibox-content adserve-list">
              <div class="row sum-five-col">
                <div class="col-xs-2">
                  <div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/views.png" alt="Total Impressions"></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Impressions</span> <span class="info-box-number" id="totalImpressions"><?php echo $order_info->sum;?> </span></div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/clicks.png" alt="Total Clicks"></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Clicks</span> <span class="info-box-number" id="totalClicks"><?php echo $click_info->sum;?> </span></div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/rate.png" alt="Click Through Rate"></span>
                    <div class="info-box-content"> <span class="info-box-text">Click Through Rate</span> <span class="info-box-number" id="clickRate"> <?php echo round($ctr_info->sum,2);?>%</span></div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/target.png" alt="eCPM"></span>
                    <div class="info-box-content"> <span class="info-box-text text-trans-none">eCPM</span> <span class="info-box-number" id="eCPMRate">£<?php echo round(($budget_info->budget/$order_info->sum)*1000,2);?> </span> </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/amount.png" alt="Amount Spent"></span>
                    <div class="info-box-content"> <span class="info-box-text">Amount Spent</span> <span class="info-box-number" id="AmountSpent">£ <?php echo $budget_info->budget;?></span> </div>
                  </div>
                </div>
              </div>
			  
			  </div>
			  </div>
			  </div>
			  </div>
</div>
              
              <!-- h3 class="content-head">&nbsp;&nbsp;Line Item: <span id="lineItemSpanId"></span></h3--> 
              
              <!--<div class="col-xs-6">
									<div class="ibox float-e-margins">
					    			    <div class="ibox-title"><h4><b>LINEITEMS COUNT PER DAY</b></h4></div>
								    	<div class="ibox-content">
											
													<canvas  class="" id="adsGraph" name="adsGraph"></canvas>
												
										</div>
									</div>
								</div>
									</div>-->
									
									
									
              <div class="row">
                <div class="col-xs-12">
                  <ul id="advTab">
                    <li id="infoBtn"><a class="active">Line Item Info</a></li>
                  </ul>
                </div>
              </div>
			  
              <div class="row">
                <div id="infoWrap">
				<div class="col-xs-12">
                 <div id="d_linitems">
                 <?php
                 $dfporder=0;
               	 	foreach($lineitem as $key=>$value )
						{
						    $dfporder='1';
						    $aMin= $value["sum"] ;
						    $aMax= $value["goal"] ;
						    
						    function pBar($aMin,$aMax)
						    {
						        $progressBarWidth;
						        $progressBarWidth=((($aMin/$aMax)*100)+"%");
						        return $progressBarWidth;
						    }
						    
						    
						    $width=pBar($aMin,$aMax);
						    
						    function pColor($aMin,$aMax){
						         $progressBarWidth;
						         $progressBarColor;
						         $someValueToCheck;
						        $progressBarWidth=((($aMin/$aMax)*100)+"%");
						        $someValueToCheck = $aMin/$aMax;
						        if($someValueToCheck <= 0.3) {$progressBarColor = "#ea5b24";}
						        else if($someValueToCheck <= 0.7) {$progressBarColor = "#dece12";}
						        else {$progressBarColor = "#4dbb40";}
						        return $progressBarColor;
						    }
						    
						    $colour=pColor($aMin,$aMax)
						    
						?>
<div class="infowrap-block dfp-infowrap clearfix"> 
			<div class="row campain-row" style="margin-top:5px"> 
			<div class="col-xs-4"> 
				<div class="bg-gray"> 
				<h3>Line Item Name</h3> 
				<p><?php echo $value["name"] ;?></p> 
				</div> 
			</div> 
			<div class="col-xs-2"> 
				<div class="bg-gray adserve-first-block"> 
				<h3>Start Date</h3> 
				<p><?php echo date("d-M-Y", strtotime($value["startdate"])) ;?></p> 
				</div> 
				</div> 
				<div class="col-xs-2"> 
				<div class="bg-gray adserve-first-block adserve-end-date"> 
				<h3>End Date</h3> 
				<p><?php echo date("d-M-Y", strtotime($value["enddate"])) ;?></p></div>  </div> <div class="col-xs-2">
		<div class="bg-gray"> 
		  <h3>Rate</h3> 
		  <p><?php echo $value["rate"] ;?></p> 
		</div> 
	  </div> 
	</div> 
	<div class="row sum-five-col" style="margin-top:15px">
	<div class="col-xs-12">
		<div class="adserve-first-block" style="display:block;float:none">
		<h3>GOAL PROGRESS</h3>
		<div class="col-xs-11"><div class="row">
			<div class="progress" style="background:#ddd">
				<div class="progressbar progress-bar progress-bar-analytics progress-bar-striped" role="progressbar" 
				aria-valuenow=<?php echo $value["sum"] ;?> aria-valuemin="0" aria-valuemax=<?php echo $value["goal"] ;?> style="width:<?php echo round($width,2);?>%;background-color:<?php echo $colour;?>">
				<?php echo $value["sum"]; ?>(<?php echo round($width,2);?>%)
				</div>
			</div>
		</div></div>
		<div class="col-xs-1"><div class="row">
			<span class="target"><?php echo $value["goal"] ;?> </span>
		</div></div>
		</div>
	</div>
</div>
	<div class="row sum-five-col adserve-list" style="margin-top:10px"> 
	  <div class="col-xs-2"> 
		<div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/views.png" alt="Total Impressions"></span> 
		  <div class="info-box-content"> <span class="info-box-text">Impressions</span> <span class="info-box-number" id="dfpImpressions"> <?php echo $value["sum"] ;?></span></div> 
		</div> 
	  </div> 
	  <div class="col-xs-2"> 
		<div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/clicks.png" alt="Total Clicks"></span> 
		  <div class="info-box-content"> <span class="info-box-text">Clicks</span> <span class="info-box-number" id="dfpClicks"><?php echo $value["clicks"] ;?> 
		  </span></div> 
		</div> 
	  </div> 
	  <div class="col-xs-2"> 
		<div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/rate.png" alt="Click Through Rate"></span> 
		  <div class="info-box-content"> <span class="info-box-text">Click Through Rate</span> <span class="info-box-number" id="dfpTRate"> <?php echo round(($value["clicks"]/$value["sum"])*100,2) ;?> %
		</span>   </div> 
		</div> 
	  </div> 
	  <div class="col-xs-2"> 
		<div class="info-box"> <span class="info-box-icon bg-green"><img src="../img/web.png" alt="website"></span> 
		  <div class="info-box-content"> <span class="info-box-text">Website</span> <span class="info-box-number" id="AmountSpent"><?php echo $value["website"] ;?> 
		 </span> </div> 
		</div> 
	  </div> 
    </div> 
    </div> 

<?php } ?>
							
							
						



                    <div id="d_facebook">

                    <?php  
                    $fporder=0;
                    foreach ($fb as $key=>$value){$fporder=1;?>
                    

                  <div class="infowrap-block facebook-infowrap clearfix"> 
    <div class="row campain-row" style="margin-top:10px;"> 
      <div class="col-xs-4"> 
        <div class="bg-gray"> 
          <h3>Line Item Name</h3>  
          <p><?php echo $value['name']; ?></p></div>  </div> 
          <div class="col-xs-2"> 
        <div class="bg-gray adserve-first-block"> 
          <h3>Start Date</h3> 
          <p> <?php  echo date("d-M-Y", strtotime( $value['start_time'])) ;  ?> </p> 
        </div> 
        </div>
          <div class="col-xs-2"> 
        <div class="bg-gray adserve-first-block adserve-end-date"> 
          <h3>End Date</h3>  
          <p> <?php   echo date("d-M-Y", strtotime( $value['end_time'])); ?> </p> 
        </div> 
      </div> 
      <div class="col-xs-2"> 
        <div class="bg-gray"> 
          <h3>Rate</h3> 
          <p>  <?php echo $value['rate']; ?> </p> 
        </div> 
      </div> 
    </div> 
    <div class="row sum-five-col adserve-list"> 
      <div class="col-xs-2"> 
        <div class="info-box"> <span class="info-box-icon bg-fb"><img src="../img/views.png" alt="Total Impressions"></span> 
          <div class="info-box-content"> <span class="info-box-text">Impressions</span> <span class="info-box-number" id="dfpImpressions">
           </span> <?php echo $value['impression']; ?></div> 
        </div> 
      </div> 
      <div class="col-xs-2"> 
        <div class="info-box"> <span class="info-box-icon bg-fb"><img src="../img/clicks.png" alt="Total Clicks"></span> 
          <div class="info-box-content"> <span class="info-box-text">Clicks</span> <span class="info-box-number" id="dfpClicks">
         </span>  <?php echo  $value['clicks']; ?></div> </div> 
      </div> 
      <div class="col-xs-2"> 
        <div class="info-box"> <span class="info-box-icon bg-fb"><img src="../img/rate.png" alt="Click Through Rate"></span> 
          <div class="info-box-content"> <span class="info-box-text">Click Through Rate</span> <span class="info-box-number" id="dfpTRate">
          </span> <?php echo round($value['ctr'],2); ?> % </div> 
        </div> 
      </div> 
      </div> 
    </div> 
    <?php } ?>
  </div> 
</div>
                  </div>

                    </div>

                    </div>

				

				</div>

        
              </div>           

              <div class="row">
                <div class="col-xs-12">
                  <ul id="advTab">
                    <li id="creativeBtn"><a class='active'>Creatives</a></li>
                  </ul>
                </div>
              </div>

            <div id="creativeWrap" >
              <div class="row">
                <div class="col-xs-6">
                  <div class="line-item-cont1">
                    <div class="ibox float-e-margins">
                      <div class="ibox-title text-uppercase">
                        <h4>Line Item Analytics</h4>
                      </div>
                      <div id="tables">
      <?php            
				foreach ($website_info as $data) {
					?>

					<div class="ibox-content" id="line-item-box_'+i+'"> 
							<div class="table-responsive" id="line-item_'+i+'" style="border: 1px solid #ddd;"> 
							  <table class="table " id="line-item-report_'+i+'" > 
								<thead> 
								  <tr> 
									<th>Website</th> 
									<th>Impressions</th> 
									<th>Clicks</th> 
									<th>CTR</th> 
								  </tr> 
								</thead> 

				<?php

					foreach ($data as  $value) {
						
					?>
								<tbody id="line-item-report-tbody_'+i+'"  style="overflow:visible"> 
								<tr>
								<td><?php  echo $value["website"];?></td><td><?php  echo $value["impressions"];?></td>
								<td><?php  echo $value["clicks"];?></td><td><?php  echo round(($value["clicks"]/$value["impressions"])*100,2);?>%</td>
								</tr>
								</tbody> 
							  
			<?php
						
				} ?>

				</table> 
							</div> 
						  </div>
			 <?php
			}
					?>

        </div>
                    </div>
                  </div>
                </div>
               <!--  <div class="col-xs-5" id="preview_line">
                 <div class="ibox-title text-uppercase"><h4>Creative Preview</h4>
					</div>
              </div> -->
			</div>

        </div>
      </div>
    </div>
 </div>
      </div>
     
      <div class="push"></div>
    </div>



<script>


if('<?php echo $fporder;?>'==1)
{
	$(".fb-img").show(); 
}

if('<?php echo $dfporder;?>'==1)
{
	$(".dfp-img").show(); 
}

var preview_count=[];


for (var j=0;j<preview_count.length;j++)
			{
				var preview ='<div id="creativepreview_'+j+'" class="carousel slide carousel-block" data-ride="carousel">  \
						<ol class="carousel-indicators" id="clickers_'+j+'"> \
						</ol> \
						<div class="carousel-inner" id="imagesslider_'+j+'"> </div> \
						<a class="left carousel-control" href="#creativepreview" data-slide="prev"> <span class="fa fa-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#creativepreview" data-slide="next"> <span class="fa fa-chevron-right"></span> <span class="sr-only">Next</span> </a> </div> \
					</div>';

					$("#preview_line").append(preview);

		for(var k=0;k<preview_count[j].length;k++)
		{

			
			if(k==0)
			{
				var slider='<li class='+a+' data-target="#creativepreview" data-slide-to='+k+' ></li>';
				var template='<div class="active item"><iframe src='+preview_count[j][k]["preview"].replace('&impl=ifr','')+'></iframe></div>' ;

			}else
			{
				var slider="<li data-target=#creativepreview data-slide-to="+k+" ></li>";
				var template='<div class="item"><iframe  src='+preview_count[j][k]["preview"].replace('&impl=ifr','')+'></iframe></div>' ;
			}
			
		   $('#clickers_'+j+'').append(slider);
		   $('#imagesslider_'+j+'').append(template);
		}	
		}




function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return '<?php  echo $_GET['id'];?>' ;
        }
    }
}

function updateecpm()
  {
    
      var impressions =$("#totalImpressions").html();

        var amount =$("#AmountSpent").html();

        impressions= parseInt(impressions.replace(/,/g, ''), 10);

        amount =amount.replace('£', '');
       
        amount= parseInt(amount.replace(/,/g, ''), 10);


       var ecpm=(amount/impressions)*1000;

       if(ecpm!=="NaN")
       {      
       document.getElementById('eCPMRate').innerHTML = "£ " +parseFloat(ecpm).toFixed(2);
       }
       
  }


    </script>

</body></html>