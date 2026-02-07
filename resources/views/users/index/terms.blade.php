@extends('layout.users.index')
@section('title')
   Terms of use
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .terms-text {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(58, 134, 255, 0.1);
        }
        
        .terms-text p {
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .terms-text ul, .terms-text ol {
            margin-left: 25px;
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .terms-text li {
            margin-bottom: 10px;
        }
        
        .highlight-box {
            background-color: rgba(13, 27, 62, 0.5);
            border-left: 4px solid var(--secondary);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .highlight-title {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .warning-box {
            background-color: rgba(255, 100, 100, 0.1);
            border-left: 4px solid #ff6464;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .warning-title {
            color: #ff6464;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .info-box {
            background-color: rgba(0, 201, 183, 0.1);
            border-left: 4px solid var(--accent);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .info-title {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .definition-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }
        
        .definition-item {
            background-color: rgba(13, 27, 62, 0.3);
            padding: 20px;
            border-radius: var(--border-radius);
            border: 1px solid rgba(58, 134, 255, 0.1);
        }
        
        .definition-term {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 17px;
        }
        
        .definition-desc {
            color: var(--text-light);
            font-size: 15px;
        }
        
        /* Table Styles */
        .earnings-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            border-radius: var(--border-radius);
            overflow: hidden;
        }
        
        .earnings-table th {
            background-color: var(--primary-light);
            color: var(--text);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid var(--secondary);
        }
        
        .earnings-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(58, 134, 255, 0.1);
            color: var(--text-light);
        }
        
        .earnings-table tr:hover {
            background-color: rgba(58, 134, 255, 0.05);
        }
        
        /* Acceptance Section */
        .acceptance-section {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 40px;
            text-align: center;
            margin: 50px 0;
            border: 2px solid rgba(58, 134, 255, 0.2);
        }
        
        .acceptance-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--text);
        }
        
        .acceptance-text {
            color: var(--text-light);
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
         <h1>{{ config('app.name') }} Terms of Service</h1>
        <p class="last-updated">Last Updated: February 1, 2026</p>
        
        <div class="section">
            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using the {{ config('app.name') }} platform (the "Service"), you agree to be bound by these Terms of Service ("Terms"). If you disagree with any part of the terms, you may not access the Service.</p>
        </div>
        
        <div class="section">
            <h2>2. Description of Service</h2>
            <p>{{ config('app.name') }} is a platform that connects:</p>
            <ul>
                <li><strong>Taskers:</strong> Individuals who want to earn money by completing simple social media tasks</li>
                <li><strong>Businesses:</strong> Companies or individuals who need social media engagement services</li>
            </ul>
            <p>The Service facilitates the completion of tasks such as liking posts, following accounts, sharing content, and watching videos on various social media platforms.</p>
        </div>
        
        <div class="section">
            <h2>3. User Accounts</h2>
            <h3>3.1 Eligibility</h3>
            <p>You must be at least 18 years old to use {{ config('app.name') }}. By using the Service, you represent and warrant that you meet this age requirement.</p>
            
            <h3>3.2 Account Security</h3>
            <p>You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p>
            
            <h3>3.3 Account Suspension</h3>
            <p>{{ config('app.name') }} reserves the right to suspend or terminate accounts that violate these Terms or engage in fraudulent activities.</p>
        </div>
        
        <div class="section">
            <h2>4. Tasker Responsibilities</h2>
            <p>As a Tasker, you agree to:</p>
            <ul>
                <li>Complete tasks honestly and according to instructions</li>
                <li>Use only your own social media accounts</li>
                <li>Not use automated bots, scripts, or fake accounts</li>
                <li>Comply with all social media platforms' terms of service</li>
                <li>Not engage in fraudulent activities to earn rewards</li>
                <li>Provide accurate information when verifying task completion</li>
            </ul>
            
            <div class="highlight">
                <p><strong>Important:</strong> {{ config('app.name') }} never asks for your social media passwords. We use secure OAuth connections for account linking.</p>
            </div>
        </div>
        
        <div class="section">
            <h2>5. Business Responsibilities</h2>
            <p>As a Business user, you agree to:</p>
            <ul>
                <li>Provide clear, accurate instructions for tasks</li>
                <li>Pay for completed tasks according to the agreed rates</li>
                <li>Not request tasks that violate social media terms of service</li>
                <li>Not request tasks that involve illegal or inappropriate content</li>
                <li>Respond to task verification requests in a timely manner</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>6. Payments and Earnings</h2>
            <h3>6.1 Tasker Earnings</h3>
            <p>Taskers earn money for each successfully completed task. Payment amounts vary based on task complexity and requirements.</p>
            
            <h3>6.2 Payment Processing</h3>
            <p>Payments are typically processed within 24 hrs depenedig on the load of request available to process.</p>
          
            </div>
        
        <div class="section">
            <h2>7. Prohibited Activities</h2>
            <p>You agree not to:</p>
            <ul>
                <li>Create multiple accounts to earn additional bonuses</li>
                <li>Use VPNs or proxies to appear in different locations</li>
                <li>Submit false verification for task completion</li>
                <li>Attempt to hack or reverse-engineer the Service</li>
                <li>Post or request tasks involving illegal content</li>
                <li>Harass other users of the Service</li>
                <li>Use the Service to spread misinformation or spam</li>
                <li>Violate any social media platform's terms of service</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>8. Content Ownership</h2>
            <p>{{ config('app.name') }} does not claim ownership of content posted through social media tasks. However, by using the Service, you grant {{ config('app.name') }} permission to:</p>
            <ul>
                <li>Access your social media accounts for task completion verification</li>
                <li>Store necessary information to facilitate the Service</li>
                <li>Use anonymized data for platform improvement</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>9. Privacy</h2>
            <p>Your privacy is important to us.</p>
        </div>
        
        <div class="section">
            <h2>10. Limitation of Liability</h2>
            <p>{{ config('app.name') }} provides the Service "as is" without warranties of any kind. We are not responsible for:</p>
            <ul>
                <li>Actions taken by social media platforms against your accounts</li>
                <li>Disputes between Taskers and Businesses</li>
                <li>Technical issues beyond our reasonable control</li>
                <li>Loss of earnings due to account suspension for Terms violations</li>
                <li>Changes to social media platforms' policies that affect task completion</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>11. Modifications to Terms</h2>
            <p>{{ config('app.name') }} reserves the right to modify these Terms at any time. We will notify users of significant changes via email or platform notifications. Continued use of the Service after changes constitutes acceptance of the new Terms.</p>
        </div>
        
        <div class="section">
            <h2>12. Termination</h2>
            <p>Either party may terminate this agreement at any time by discontinuing use of the Service. {{ config('app.name') }} reserves the right to terminate accounts that violate these Terms.</p>
        </div>
        
        <div class="section">
            <h2>13. Governing Law</h2>
            <p>These Terms shall be governed by the laws of the State of Delaware, United States, without regard to its conflict of law provisions.</p>
        </div>
        
    
        
    </section>
@endsection