#!/usr/bin/perl

print "hello world\n";
my $i = 0;
while(1) {
  my $filename = 'temp.log';
  my $out =  "the ${i} lines.\n";
  open(my $fh, '>>', $filename) or die "Could not open file '$filename' $!";
  print $fh $out;
  close $fh;
  
  print($out);
  sleep(1);
  $i++;
}