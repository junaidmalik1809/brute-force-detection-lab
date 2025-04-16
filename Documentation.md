# Brute Force Detection Lab – Documentation

## 📍 Overview
This lab simulates a brute-force attack using Hydra against a PHP-based login form hosted on an Ubuntu server. It captures the attack traffic using Wireshark and detects malicious attempts using Snort IDS and pfSense firewall.

---

## 🧰 Environment Setup

- **Ubuntu VM:** Hosted an Nginx server running a simple login form (index.php).
- **pfSense VM:** Configured to route traffic and monitor firewall activity.
- **Wireshark:** Captured HTTP POST requests and analyzed credential exposure.
- **Snort:** Deployed with a custom rule to detect login attempts based on HTTP payloads.

---

## 💥 Brute Force Simulation

**Tool Used:** Hydra  
**Command Example:**

```bash
hydra -l admin -P passwords.txt 192.168.1.10 http-post-form "/index.php:username=^USER^&password=^PASS^:F=Invalid username or password" -V

Hydra attempted multiple login combinations. The correct credentials triggered a "Login successful" response.


📸 Traffic Analysis (Wireshark)

    Captured HTTP POST requests containing login credentials.

    Followed TCP streams to extract cleartext payloads.

    Identified usernames and passwords in network traffic.

🔒 Detection Using Snort

Custom Rule Example:

alert tcp any any -> any 80 (msg:"Brute Force Login Attempt Detected"; content:"username="; nocase; content:"password="; nocase; sid:1000001; rev:1;)

Rule triggered on multiple login attempts to /index.php.
Alerts validated via Snort and pfSense web interface.

✅ Outcome

    Successfully simulated and detected brute-force login attempts.

    Captured attack traffic and analyzed HTTP credentials.

    Validated IDS alerts using custom Snort rules.

📁 References

    Hydra Documentation

    Wireshark Filters

    Snort Rule Basics

