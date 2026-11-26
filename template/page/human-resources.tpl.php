<?php //Variable declarations for region templates
  $head_title = '<title>Open Source HR Software | Apache OFBiz</title>';
  $head_description = 'Apache OFBiz includes free, open source HR software. Keep staff records, positions, skills, leave, training and reviews in the same system as your business.';
?>

  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Open Source HR Software</h1>
          <div class="span4" id="navTrail"> <a href="<?= $base_url ?>index.html" class="homeLink">home</a><span>/</span><a href="<?= $base_url ?>business-users.html#UsrModules">Modules</a><span>/</span><span class="current">Human Resources</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#Hr1"> Who it is for </a> </li>
              <li> <a href="#Hr2"> Features </a> </li>
              <li> <a href="#Hr3"> How it connects </a> </li>
              <li> <a href="#Hr4"> Try it </a> </li>
              <li> <a href="#Hr5"> Questions </a> </li>
              <li> <a href="#Hr6"> Get help </a> </li>
            </ul>
          </aside>
          <div class="span10">
            <section class="slice row clearfix">
              <div class="span10">
                <p>Apache OFBiz includes free HR software for basic staff records. Keep your departments, positions, employees, leave and training next to your orders and accounts. It is open source under the Apache License 2.0.</p>
              </div>
            </section>
            <section id="Hr1" class="slice row clearfix">
              <div class="span10">
                <h2>Who it is for</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Small companies that want staff records in the same system as their business.</li>
                  <li><i class="icon-pin"></i> Managers who need to see who holds which position and who reports to whom.</li>
                  <li><i class="icon-pin"></i> Companies that already use OFBiz and want one place for people data.</li>
                </ul>
                <p>The HR features are basic. They keep records. They do not run payroll.</p>
              </div>
            </section>
            <section id="Hr2" class="slice row clearfix">
              <div class="span10">
                <h2>What OFBiz does for HR</h2>
                <div class="divider"><span></span></div>
                <h3>Company and department structure</h3>
                <p>See your company as a tree of departments on the HR main screen. Add a department under the company, or under another department.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Organization, Job Position and Definition</a></p>
                <h3>Positions and who fills them</h3>
                <p>Create a position, such as Programmer, in a department. Then record which employee fills it, from which date. Add the duties of each position and who it reports to.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Employee Positions</a></p>
                <h3>Employee records</h3>
                <p>Add a new employee with a name and contact details. The employee profile shows the current company, position and salary in one place.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Employees</a></p>
                <h3>Employment dates and endings</h3>
                <p>Record when each employment starts and ends. When someone leaves, record the type, such as resignation or retirement, and the reason.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Employments</a></p>
                <h3>Skills, qualifications and resumes</h3>
                <p>Record each person's skills, with years of experience and a rating. Add qualifications, such as degrees and certificates, and keep resumes on file.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources</a></p>
                <h3>Performance reviews</h3>
                <p>Write a performance review for an employee, with a manager and a period. Add review items and ratings, and keep performance notes between reviews.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Performance Management and Employee Evaluation</a></p>
                <h3>Leave</h3>
                <p>An employee or manager records a leave, with its type, reason and dates. The approver then approves or rejects it. Keep a list of public holidays as well.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Leave</a></p>
                <h3>Training</h3>
                <p>Plan training classes on a calendar. Employees apply for a class, and a manager approves the request.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Training</a></p>
                <h3>Recruitment</h3>
                <p>Open a job requisition, which is a request to hire for a position. Post it inside the company, record the applications, and plan interviews. Approve the chosen candidate.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Recruitment</a></p>
                <h3>Salary and benefit records</h3>
                <p>Set pay grades and salary steps. Record each employee's pay history, benefits and how they want to be paid. The payroll history lists payroll invoices made in Accounting.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources, Employee Salary and Benefits Administration</a></p>
                <p><img src="<?= $base_url ?>images/modules/human-resources-1-departments.png" alt="The HR main screen with the company and its departments as a tree" style="max-width: 100%;"/><br/>The HR main screen with the company and its departments as a tree.</p>
                <p><img src="<?= $base_url ?>images/modules/human-resources-2-employee.png" alt="An employee profile with company, position and salary" style="max-width: 100%;"/><br/>An employee profile with company, position and salary.</p>
              </div>
            </section>
            <section id="Hr3" class="slice row clearfix">
              <div class="span10">
                <h2>How it connects with the rest of OFBiz</h2>
                <div class="divider"><span></span></div>
                <p>Employees are the same people records that the rest of OFBiz uses. So an employee can also log in and do work. Staff record their hours on timesheets in the Work Effort application. Payroll invoices and payments are kept in Accounting. See <a href="<?= $base_url ?>accounting.html">Accounting</a>.</p>
              </div>
            </section>
            <section id="Hr4" class="slice row clearfix">
              <div class="span10">
                <h2>Try it</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Open the <a href="<?= $base_url ?>ofbiz-demos.html">public demo</a> and go to the HR application.</li>
                  <li><i class="icon-pin"></i> <a href="<?= $base_url ?>download.html">Download Apache OFBiz</a> and run it on your own computer.</li>
                  <li><i class="icon-pin"></i> Read the <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_human_resources">Human Resources chapter of the OFBiz user manual</a>.</li>
                </ul>
              </div>
            </section>
            <section id="Hr5" class="slice row clearfix">
              <div class="span10">
                <h2>Questions and answers</h2>
                <div class="divider"><span></span></div>
                <h3>Is Apache OFBiz free?</h3>
                <p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
                <h3>Does OFBiz run payroll?</h3>
                <p>No. It does not work out pay, tax or deductions. It keeps salary records, and payroll invoices can be entered in Accounting.</p>
                <h3>Does it count leave balances?</h3>
                <p>No. It records each leave and its approval. It does not track how many days each person has left.</p>
                <h3>Is there a self-service app for employees?</h3>
                <p>No. Staff with a login use the same web screens. There is no separate mobile app.</p>
                <h3>Do I need technical skills to set it up?</h3>
                <p>Yes. OFBiz runs on Java, and setup needs some technical work. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>
              </div>
            </section>
            <section id="Hr6" class="slice row clearfix">
              <div class="span10">
                <h2>Get help</h2>
                <div class="divider"><span></span></div>
                <p>Ask questions on the <a href="<?= $base_url ?>mailing-lists.html">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
