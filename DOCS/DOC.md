# PROJECT DOCUMENTATION

## CONTENTS

1. Introduction
  1.1 Project overview
  1.2 Project development eam
  1.3 Project objective
  1.4 Project requirements & specifications
  1.5 Project scopes & limitations
  1.6 Project resources
  1.7 Project timeline
2. Project Brief
  2.1 Project documentation
  2.2 Project planning
    2.2.1 Web features
    2.2.2 Coding conventions, practices, and approach
      2.2.2.1 Naming Conventions
        2.2.2.1.1 Scopes
        2.2.2.1.2 Variables
        2.2.2.1.3 Constants
        2.2.2.1.4 Static names
      2.2.2.2 Function conventions (table)
      2.2.2.3 Coding references & standards (table)
    2.2.3 Server file structure
    2.2.4 Front-end designs & drafts
      2.2.1 Web layoout sketches (freehand drawings)
      2.2.2 Web wireframes (vectors, shapes)
      2.2.3 Web mockups (near-computer visualization)
      2.2.4 Animation flow sketches
    2.2.5 API logic flow (frontend & backend)
    2.2.6 Database design
      2.2.6.1 Tables
      2.2.6.2 ERD (Entity-Relationship Diagram)
    2.2.7 3rd-party API/library integration
  *2.3 Project Coding task organization
    2.3.1 Front-end static UI
    2.3.2 Front-end animations
    2.3.3 Front-end scripting
    2.3.4 Back-end web API
    2.3.5 Database
    2.3.6 External API integrations
  2.4 Project Resources (should closely match on 1.5)
    2.4.1 Hardware
    2.4.2 Software & coding environment
    2.4.3 Manpower
    2.4.4 Source codes
    2.4.5 Coding platform
    2.4.6 Coding tools & debugger
    2.4.7 Digital storage
    2.4.8 Data source
3. Project Detailed Specifications**
  3.1 Front-end static UI
    3.1.1 DOM-tree HTML structure (diagram)
    3.1.2 Multimedia resources (list)
    3.1.3 Default CSS properties & SCSS @mixins (list)
    3.1.4 Web Responsiveness (list, dynamic dimensions & static dimensions)
  3.2 Front-end animations
    3.2.1 Animations summary
    3.2.2 Interactive & user-triggered elements (list)
    3.2.3 Inter-Webpage transitions (list, timeframe)
    3.2.4 Single-looped animations (list, timeframe)
    3.2.3 Infinite-loop animations (list, timeframe)
  3.3 Front-end scripts
    3.3.1 Front-end scripts summary
    3.3.2 DOM defaults & manipulations (list)
    3.3.3 General scripts (list, flowchart)
    3.3.4 Non-animation event listeners and callbacks (list, flowchart)
    3.3.5 Validations (list, flowchart)
      3.3.5.1 Client-side validations
      3.3.5.2 Asynchronous validations
    3.3.6 Other asynchronous features (list, callbacks)
  3.4 Back-end web API
    3.4.1 Back-end API summary
    3.4.2 Mark-up templates (list)
    3.4.3 General API (list, flowchart)
    3.4.4 Feature-specific API (list, flowchart)
  3.5 Database
    3.5.1 Database data type assignment
    3.5.2 DDL
    3.5.3 DDM
  3.6 External API integrations

=============================================================================

## 1. Introduction

### 1.1 Project Overview

Project Title:
Project Type:
Project Concept:
Project Visual Theme:
Project Owner:
Project Audience:

### 1.2 Project Development Team

Project Leader/OIC:
Lead Planning, Design, Frameworks & Documentations:
Lead Programmer:
Lead Front-end Developer:

### 1.3 Project Objectives

#### 1.3.1 Main Objectives

#### 1.3.2 Optional objectives

### 1.4 Project Requirements & Specifications

#### 1.4.1 Target Project Specifications

#### 1.4.2 Project Pre-requisites

#### 1.4.3 Optional Specifications

### 1.5 Project Scopes & Limitations

### 1.6 Project Resources

### 1.7 Project Timeline

| Project Phase | Action Items | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 | 00/00 |
|---------------|--------------|-------|-------|-------|-------|-------|-------|-------|-------|-------|-------|
|               | 1.           |       |       |       |       |       |       |       |       |       |       |
|               | 2.           |       |       |       |       |       |       |       |       |       |       |
|               | 3.           |       |       |       |       |       |       |       |       |       |       |
|               | 4.           |       |       |       |       |       |       |       |       |       |       |
|               | 5.           |       |       |       |       |       |       |       |       |       |       |

## 2. Project Brief

### 2.1 Project Documentation

Documentation is very important aspect in every projects and has been critical especially for post-project scenarios where an individual (interested person,maybe) will ask for documentation and/or specification.
The developer have no proper training and certification to adhere any IT documentation standards and doesn't guarantee the 100% quality of the documentation.
It is important to note that the developer have relevant academic exposure during college wherein most of the methodologies applied in this documentation are based on the academic experiences, the APA format.
Also, the developer have 6-years professional career at an ISO-certified company where paper-based documentations are among the standard procedures, have observed/read such documentations, and helped orginators to modify some documentations.
Hence, there maybe an APA-style and ISO-style hybrid approaches maybe seen in this documentation; nevertheless, this documentation was created since planning stage with hopes to make things easier to the programmer.
The important details in this documentation are the specifications and planning, and this is the focus of this documentation.
Most of specifications are presented in tabular, diagram, or in chart flavors (rather than paragraph) to help visualize the data.

### 2.2 Project Design & Planning

#### 2.2.1 Web Features

1. Feature 1
2. Feature 2
3. Feature 3

#### 2.2.2 Coding Conventions, Practices, and Approach

Following items are highlighted in this chapter:
casing formats for the codes
naming patterns and formats

##### 2.2.2.1 Naming Conventions

###### 2.2.2.1.1 Scopes

| Name category/description | language/API  | declaration             | base casing | naming characteristics                  |
|---------------------------|---------------|-------------------------|-------------|-----------------------------------------|
| super-global variables    | PHP           | (built-in)              | lowercase   | (built-in)                              |
| global variables          | JavaScript    | _name = ""              | lowercase   | underscore, root & no-'var' declaration |
|                           | PHP           | $GLOBALS['name'] = ""   | lowercase   | via $GLOBALS[]                          |
| local variables           | JavaScript    | let name = ""           | lowercase   | declared locally with 'var'             |
|                           | PHP           | name = ""               | lowercase   | declared locally                        |
| constants                 | JavaScript    | const NAME = ""         | UPPERCASE   | semantic noun                           |
|                           | PHP           | define('NAME', 'value') | UPPERCASE   | semantic noun                           |

###### 2.2.2.1.2 Variables

| Var category/description | DATATYPE    | dependencies  | language/API  | initialization                          | character casing  | naming characteristics     | mutations     |
|--------------------------|-------------|---------------|---------------|------------------------              |------------------ |----------------------------|
| general purpose          | varies      | varies        | JavaScript    | ????               | camelCase         | semantic
| !loop                    | int         | block only    | JavaScript    | l=1                                  | lowercase         | 'l' character
|                          |             |               | PHP           | $l=1                                 | lowercase         | '$l' character
|                          |             |               | SCSS          | $l                                   | lowercase         | '$l' character
| array/nodelist           | DOM/array   | block only    | JavaScript    | arr = "doc.nodelist" or [...]                 | lowercase         | '_rr' character               | arr1, arr2,...
|                          | array       |               | PHP           | $arr = [...]                       | lowercase         | '$_rr' character              | $arr1, $arr2,...
| styles/css-prop          | DOM         | local/global  | JavaScript    | styl_name = "doc.node.style.color"   | snake_case        | 'styl_' prefix + abstnoun     | styl_fcolor1, styl_bcolor12
| +obj/node selector       | DOM         | many          | JavaScript    | node_name = "doc.node"               | snake_case        | 'node_' prefix + noun         | node_body1, node_frame12
| string builder           | string      | varies        | JavaScript    | strg_name = "" + ""                  | snake_case        | 'strg' characetr + noun       | strg_person1, strg_add
|                          | string      | varies        | PHP           | $strg_name = "" . ""                 | snake_case        | (SAME AS ABOVE)
| path/url                 | string      | local/global  | JavaScript    | path_name = ""                       | snake_case        | 'path_' prefix + noun         | path_loc1, path_page12
|                          | string      |               | PHP           | $path_name = ""                      | snake_case        | '$path_' prefix + noun        | $path_loc1, $path_web12
| *mutated variables       | NA          | NA            | NA            | xyz1, xyz11, x121                    | numbercase        | '#...' suffixes, submutations | NA         |

-'!' indicates that category can only be set as local variable type
-'+' indicates that category can only be set as global variable type

###### 2.2.2.1.3 Constants

| Constant category           | DATATYPE | locations                         | character casing | prefix/suffix | samples
|-----------------------------|----------|-----------------------------------|------------------|---------------|------------------
| numerical constants         | num      | anywhere                          | POTHOLE_CASE     | 'NUM_'        | NUM_DEVICE_PIXELS
| path/url                    | string   | anywhere                          | POTHOLE_CASE     | 'PATH_'       | PATH_IP
|

Constant groups
| Project information         | varies   | web title, headers, footers, ...  | POTHOLE_CASE     | 'WEB_'        | WEB_TITLE, WEB_DEVELOPERS[]
| Debugging                   | varies   | anywhere                          | UPPERCASE        | 'DEBUG_'      | DEBUG_PRINT

Constant arrays
| Array name      | Array length | Data Type | ELEMENTS
|-----------------|--------------|-----------|--------------------------------------------------------------------------------
| DAYWEEKS        | 7            | string    | ['SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY']
| DAYWEEKS_SHORT  | 7            | string    | ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT']
| MONTHYEAR_SHORT | 12           | string    | ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC']

###### 2.2.2.1.4 Static Names

| Name category/description     | language/API | sample                | prefix/suffix                  | character casing  | naming characteristics     |
|-------------------------------|--------------|-----------------------|--------------------------------|------------------ |----------------------------|
| id markup tags                | HTML         | id="m0-grid-contain"  | DOM-layer + name               | spinal-case       | semantic collective-noun   |
| class markup tags (2 classes) | HTML         | class="m1 containers" | DOM-layer & name + 's' suffix  | lowercase         | semantic collective-noun   |
| constructors names            | JavaScript   | ...ConstructObj().Obj |                                | PascalCase        | semantic noun              |
| database names                | SQL          | DBaccounts            | 'DB' + name + 'S' suffix       | THorcase          |
| table names                   | SQL          | TBusers               | 'S' suffix                     | THorcase          |
| column field names            | SQL          | COLUMNFIELD           |                                | PascalCase        |

##### 2.2.2.2 Functions & Mixins

| Name category/description     | Return Data Type | language/API   | name samples       | prefix/suffix | character casing  | naming characteristics |
|----------------------------   |------------------|----------------|--------------------|---------------|------------------ |------------------------|
| general function names        | VARIES           | JavaScript/PHP | fAdd(){}           | f + name      | camelCase         | 'f' character + verb---|
|                               | VARIES           | PHP            | fAdd(){}           |               | camelCase         | 'f' character + verb---|
| function/mixin arguments      | VARIES           | JavaScript     | fz, fy, fx, fw,... |               | lowercase         | 'f_' character         |
|                               | VARIES           | PHP            | $fz, $fy, $fx,...  |               | lowercase         | '$f_' character        |
|                               | VARIES           | SCSS           | $fz, $fy, $fx,...  |               | lowercase         | '$f_' character        |
| mathematical functions        | num              | JavaScript/PHP | fMathArea()        | fMath + name  | camelCase         |
| logical/conditional functions | num, str         | JavaScript/PHP | fCondSwitch()      | fCond + name  | camelCase         |
| boolean function              | bool             | JavaScript/PHP | fBoolItemTrue()    | fBool + name  | camelCase         |
| system functions              | VARIES           | JavaScript/PHP | fSys()             | fSys + name   | camelCase         |
| timedate functions            | timedate         | JavaScript/PHP | fTimeNow()         | fTime + name  | camelCase         |
| randomizer functions          | num              | JavaScript/PHP | fRndmWheel()       | fRndm + name  | camelCase         |

##### 2.2.2.3 References & Standards

| Coding Language | References/Standards
|-----------------|-------------------------
| HTML/HTML5      | HTML Living Standard
|                 | W3C HTML 5.1
| CSS             | W3C CSS3
| SCSS            | SASS 3.5.1
| JavaScript      | ECMAScript 2017
| PHP             | PHP 7.2.2
| SQL             | ISO/IEC 9075


#### 2.2.3 Server File Directory Structure

