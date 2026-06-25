import os
import re

files = [
    '1/index.html', '10a/index.php', '10b/index.php', '2a/index.html', '2b/content1.html', 
    '2b/content2.html', '2b/index.html', '2b/nav.html', '3/frame1.html', 
    '3/frame2.html', '3/frame3.html', '3/frame4.html', '3/index.html', 
    '4/index.html', '5/index.html', '6/index.html', '6/style.css', 
    '7a/index.html', '7b/index.html', '8/index.html', '9/index.html'
]

for f in files:
    if not os.path.exists(f):
        continue
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # Remove HTML comments (like <!-- 1. External CSS -->)
    content = re.sub(r'<!--.*?-->', '', content, flags=re.DOTALL)
    
    # Remove CSS comments (like /* Orange Button */)
    content = re.sub(r'/\*.*?\*/', '', content, flags=re.DOTALL)
    
    # Remove single line JS comments (like // Reset errors), 
    # but do NOT remove // <![CDATA[ or // ]]> or http://
    # We use a regex that matches // followed by text, as long as it doesn't match <![CDATA[ or ]]>
    lines = content.split('\n')
    new_lines = []
    for line in lines:
        if '//' in line and 'http://' not in line and '<![CDATA[' not in line and ']]>' not in line:
            # find the // and remove everything after it
            idx = line.find('//')
            new_lines.append(line[:idx].rstrip())
        else:
            new_lines.append(line)
            
    content = '\n'.join(new_lines)
    
    # Remove excessive empty lines
    content = re.sub(r'\n\s*\n', '\n\n', content)
    
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)

print("Comments removed.")
